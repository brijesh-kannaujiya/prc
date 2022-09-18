<?php
#app/Http/Admin/Controllers/ShopProductController.php
namespace App\Admin\Controllers;

use App\Admin\Admin;
use App\Admin\Models\AdminUser;
use App\Http\Controllers\Controller;
use App\Mail\SendMail;
use App\Models\ShopAttributeGroup;
use App\Models\ShopBrand;
use App\Models\ShopCategoryDescription;
use App\Models\ShopEmailTemplate;
use App\Models\ShopProductCategory;
use App\Models\ShopProductRepairPrice;
use App\Models\ShopRepair;
use App\Models\ShopRepairProduct;
use App\Models\ShopTask;
use App\Models\ShopTaskTypeDetails;
use App\Models\ShopTax;
use App\Models\ShopCategory;
use App\Models\ShopLanguage;
use App\Models\ShopWeight;
use App\Models\ShopLength;
use App\Models\ShopProduct;
use App\Models\ShopProductAttribute;
use App\Models\ShopProductBuild;
use App\Models\ShopProductDescription;
use App\Models\ShopProductGroup;
use App\Models\ShopProductImage;
use App\Models\ShopSupplier;
use Illuminate\Support\Facades\Mail;
use Validator;

class ShopProductController extends Controller
{
    public $languages, $kinds, $virtuals, $attributeGroup, $listWeight, $listLength;

    public function __construct()
    {
        $this->languages = ShopLanguage::getList();
        $this->attributeGroup = ShopAttributeGroup::getList();
    }

    /**
     * getCategoriesByBrandIDAjax
     * Get Categories by brand id 
     */
    public function getCategoriesByBrandIDAjax()
    {
        $res = array();
        $res['data'] = array();
        $res['category_opt'] = "";
        $formData = request()->all();
        $brandModel = (new ShopBrand());
        $brandModel = $brandModel->where('alias', $formData['brand_id'])->first();
        // if empty brand model data
        if (empty($brandModel)) {
            return  json_encode($res);
        }
        // json encode response 
        $categories = @$brandModel->categories->toArray();
        $category_opt = "";
        $catModel = (new ShopCategoryDescription());
        if (!empty($categories)) {
            ob_start();
?>
            <option value="">All Category</option>
            <?php
            $category_opt .=  ob_get_clean();
            foreach ($categories as $eachCat) {
                $catDesc = $catModel->where('category_id', $eachCat['id'])->first();
                ob_start();
            ?>
                <option value="<?php echo $eachCat['id'] ?>"><?php echo @$catDesc->title; ?></option>
<?php
                $category_opt .= ob_get_clean();
            }
        }
        $res['data'] = @$brandModel->categories->toArray();
        $res['category_opt']  = $category_opt;
        return  response()->json($res);
    }

    public function index()
    {

        $data = [
            'title' => trans('product.admin.list'),
            'subTitle' => '',
            'icon' => 'fa fa-indent',
            'urlDeleteItem' => route('admin_product.delete'),
            'removeList' => 1, // Enable function delete list item
            'buttonRefresh' => 1, // 1 - Enable button refresh
            'buttonSort' => 1, // 1 - Enable button sort
            'buttonFilter' => 1, // 1 - Enable button filter
            'css' => '',
            'js' => '',
        ];
        //Process add content
        $data['menuRight'] = sc_config_group('menuRight', \Request::route()->getName());
        $data['menuLeft'] = sc_config_group('menuLeft', \Request::route()->getName());
        $data['topMenuRight'] = sc_config_group('topMenuRight', \Request::route()->getName());
        $data['topMenuLeft'] = sc_config_group('topMenuLeft', \Request::route()->getName());
        $data['blockBottom'] = sc_config_group('blockBottom', \Request::route()->getName());


        $listTh = [
            'id' => trans('product.id'),
            'image' => trans('product.image'),
            'name' => trans('product.name'),
            'category' => trans('product.category'),
            'brand' => trans('product.brand'),
            'sort'  => trans('product.sort'),
        ];

        $listTh['status'] = trans('product.status');
        $listTh['action'] = trans('product.admin.action');

        $keyword = request('keyword') ?? '';

        $sort_order = request('sort_order') ?? 'id_desc';

        $select_filter = request('select_filter') ?? '';
        $cat_id = request('cat_id') ?? '';

        $arrSort = [
            'id__desc' => trans('product.admin.sort_order.id_desc'),
            'id__asc' => trans('product.admin.sort_order.id_asc'),
            'name__desc' => trans('product.admin.sort_order.name_desc'),
            'name__asc' => trans('product.admin.sort_order.name_asc'),
            'sort__asc' => trans('product.admin.sort_order.sort_asc'),
            'sort__desc' => trans('product.admin.sort_order.sort_desc'),
        ];


        $tableDescription = (new ShopProductDescription)->getTable();
        $tableProduct = (new ShopProduct)->getTable();
        $tableProductCategory = (new ShopProductCategory)->getTable();
        $tableCategoryDescription = (new ShopCategoryDescription())->getTable();
        $tableCategory = (new ShopCategory)->getTable();
        $tableBrand = (new ShopBrand)->getTable();

        if ($select_filter) {
            $brand = (new ShopBrand())->getDetail($select_filter, 'alias');
            $cats = (new ShopCategory())->where('brand_id', $brand->id);
            $obj = (new ShopProduct)
                ->leftJoin($tableProductCategory, $tableProductCategory . '.product_id', $tableProduct . '.id')
                ->leftJoin($tableCategoryDescription, $tableCategoryDescription . '.category_id', $tableProductCategory . '.category_id')
                ->leftJoin($tableDescription, $tableDescription . '.product_id', $tableProduct . '.id')
                ->where($tableDescription . '.lang', sc_get_locale());

            $obj = $obj->where(function ($sql) use ($cats, $tableCategoryDescription, $keyword) {
                $arrayCat = [];
                foreach ($cats->get() as $cat) {
                    $sql->orWhere($tableCategoryDescription . '.category_id', $cat->id);
                }
            });
        } else {
            $obj = (new ShopProduct)
                ->leftJoin($tableProductCategory, $tableProductCategory . '.product_id', $tableProduct . '.id')
                ->leftJoin($tableCategoryDescription, $tableCategoryDescription . '.category_id', $tableProductCategory . '.category_id')
                ->leftJoin($tableDescription, $tableDescription . '.product_id', $tableProduct . '.id')
                ->where($tableDescription . '.lang', sc_get_locale());
        }


        if ($keyword) {
            $obj = $obj->where(function ($sql) use ($tableDescription, $tableProduct, $tableCategoryDescription, $keyword) {
                $sql->orWhere($tableCategoryDescription . '.title', 'like', '%' . $keyword . '%')
                    ->orWhere($tableDescription . '.name', 'like', '%' . $keyword . '%')
                    ->orWhere($tableDescription . '.keyword', 'like', '%' . $keyword . '%')
                    ->orWhere($tableDescription . '.description', 'like', '%' . $keyword . '%');
            });
        }

        // cat id 
        if($cat_id){
            $obj = $obj->where($tableProductCategory . '.category_id',$cat_id);
        }


        if ($sort_order && array_key_exists($sort_order, $arrSort)) {
            $field = explode('__', $sort_order)[0];
            $sort_field = explode('__', $sort_order)[1];
            $obj = $obj->sort($field, $sort_field);
        } else {
            $obj = $obj->sort('id', 'desc');
        }
        $dataTmp = $obj->paginate(20);


        $dataTr = [];
        foreach ($dataTmp as $key => $row) {
            $arrName = [];
            $brandName = [];
            foreach ($row->categories as $category) {
                $arrName[] = $category->description()->where('lang', sc_get_locale())->first()->title;
                $brandName[] = @$category->brand()->first()->name;
            }
            $dataMap = [
                'id' => $row['id'],
                'image' => sc_image_render($row->getThumb(), '50px', '50px', $row['name']),
                'name' => $row['name'],
                'category' => implode(';<br>', $arrName),
                'brand' => implode(';<br>', $brandName),
                'sort'  => $row['sort']


            ];
            $dataMap['status'] = $row['status'] ? '<span class="label label-success">ON</span>' : '<span class="label label-danger">OFF</span>';
            $dataMap['action'] = '
            <a href="' . route('admin_product.edit', ['id' => $row['id']]) . '">
            <span title="' . trans('product.admin.edit') . '" type="button" class="btn btn-flat btn-primary">
            <i class="fa fa-edit"></i>
            </span>
            </a>&nbsp;

            <span onclick="deleteItem(' . $row['id'] . ');"  title="' . trans('admin.delete') . '" class="btn btn-flat btn-danger">
            <i class="fa fa-trash"></i>
            </span>';
            $dataTr[] = $dataMap;
        }

        $data['listTh'] = $listTh;
        $data['dataTr'] = $dataTr;
        $data['pagination'] = $dataTmp->appends(request()->except(['_token', '_pjax']))->links('admin.component.pagination');
        $data['resultItems'] = trans('product.admin.result_item', ['item_from' => $dataTmp->firstItem(), 'item_to' => $dataTmp->lastItem(), 'item_total' => $dataTmp->total()]);

        //menuRight
        $data['menuRight'][] = '<a href="' . route('admin_product.create') . '" class="btn btn-success btn-flat" title="New" id="button_create_new">
        <i class="fa fa-plus" title="' . trans('admin.add_new') . '"></i>
        </a>';
        //=menuRight

        //menuSort        
        $optionSort = '';
        foreach ($arrSort as $key => $status) {
            $optionSort .= '<option  ' . (($sort_order == $key) ? "selected" : "") . ' value="' . $key . '">' . $status . '</option>';
        }
        $data['optionSort'] = $optionSort;
        $data['urlSort'] = route('admin_product.index');

        $optionFilter = '';
        $brands = (new ShopBrand)->getData();
        foreach ($brands as $brand) {
            $optionFilter .= '<option  ' . (($select_filter == $brand->alias) ? "selected" : "") . ' value="' . $brand->alias . '">' . $brand->name . '</option>';
        }
        $data['optionFilter'] = $optionFilter;
        $data['urlFilter'] = route('admin_product.index');
        //=menuSort

        //topMenuRight
        $data['topMenuRight'][] = '
                <form action="' . route('admin_product.index') . '" id="button_search">
                   <div onclick="$(this).submit();" class="btn-group pull-right">
                           <a class="btn btn-flat btn-primary" title="Refresh">
                              <i class="fa  fa-search"></i>
                              
                           </a>
                   </div>
                   <div class="btn-group pull-right">
                         <div class="form-group">
                           <input type="text" name="keyword" class="form-control" placeholder="' . trans('product.admin.search_place') . '" value="' . $keyword . '">
                         </div>
                   </div>
                </form>';
        //=topMenuRight

        return view('admin.screen.list')
            ->with($data);
    }

    /**
     * Form create new order in admin
     * @return [type] [description]
     */
    public function create()
    {
        // html select attribute
        $htmlProductAtrribute = '<tr><td><br><input type="text" name="attribute[attribute_group][name][]" value="attribute_name" class="form-control input-sm" placeholder="' . trans('product.admin.add_attribute_name') . '" /></td><td><br><input type="text" name="attribute[attribute_group][add_value][]" value="attribute_value" class="form-control input-sm" placeholder="' . trans('product.admin.add_attribute_place') . '"></td><td><br><span title="Remove" class="btn btn-flat btn-sm btn-danger removeAttribute"><i class="fa fa-times"></i></span></td></tr>';
        //end select attribute

        // html add more images
        $htmlMoreImage = '<div class="input-group"><input type="text" id="id_sub_image" name="sub_image[]" value="image_value" class="form-control input-sm sub_image" placeholder=""  /><span class="input-group-btn"><a data-input="id_sub_image" data-preview="preview_sub_image" data-type="product" class="btn btn-sm btn-primary lfm"><i class="fa fa-picture-o"></i> Choose</a></span></div><div id="preview_sub_image" class="img_holder"></div>';
        //end add more images

        $data = [
            'title' => trans('product.admin.add_new_title'),
            'subTitle' => '',
            'title_description' => trans('product.admin.add_new_des'),
            'icon' => 'fa fa-plus',
            'languages' => $this->languages,
            'categories' => (new ShopCategory)->getTreeCategories(),
            'brands' => (new ShopBrand)->getList(),
            'repairs' => (new ShopRepair())->getList(),
            'attributeGroup' => $this->attributeGroup,
            'htmlProductAtrribute' => $htmlProductAtrribute,
            'htmlMoreImage' => $htmlMoreImage,

        ];
        return view('admin.screen.add_product')
            ->with($data);
    }

    /**
     * Post create new order in admin
     * @return [type] [description]
     */

    public function postCreate()
    {

        $data = request()->all();
        $langFirst = array_key_first(sc_language_all()->toArray()); //get first code language active
        $data['alias'] = !empty($data['alias']) ? $data['alias'] : $data['descriptions'][$langFirst]['name'];
        $data['alias'] = sc_word_format_url($data['alias']);
        $data['alias'] = sc_word_limit($data['alias'], 100);

        $arrValidation = [
            'sort' => 'numeric|min:0',
            'descriptions.*.name' => 'required|string|max:100|unique:"' . ShopProductDescription::class . '"',
            'descriptions.*.keyword' => 'nullable|string|max:100',
            'descriptions.*.description' => 'nullable|string',
            'category' => 'required',
            'alias' => 'required|regex:/(^([0-9A-Za-z\-_]+)$)/|unique:"' . ShopProduct::class . '",alias|string|max:100',
        ];
        $arrMsg = [
            'descriptions.*.name.required' => trans('validation.required', ['attribute' => trans('product.name')]),
            'category.required' => trans('validation.required', ['attribute' => trans('product.category')]),
            'alias.regex' => trans('product.alias_validate'),
        ];


        $validator = Validator::make($data, $arrValidation, $arrMsg ?? []);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput($data);
        }
        $category = $data['category'] ?? [];
        $attribute = $data['attribute'] ?? [];
        $descriptions = $data['descriptions'];
        $subImages = $data['sub_image'] ?? [];
        $productRepairMap = $data['product'] ?? [];



        $dataInsert = [
            'brand_id' => $data['brand_id'] ?? 0,
            'alias' => $data['alias'],
            'image' => $data['image'] ?? '',
            'status' => (!empty($data['status']) ? 1 : 0),
            'sort' => (int) $data['sort'],
            'comment' => $data['comment'],
        ];
        //insert product
        $product = ShopProduct::create($dataInsert);

        //Insert category
        if ($category) {
            $product->categories()->attach($category);
        }

        //Insert attribute
        if ($attribute) {
            $arrDataAtt = [];
            foreach ($attribute as $group => $rowGroup) {
                if (count($rowGroup)) {
                    foreach ($rowGroup['name'] as $key => $nameAtt) {
                        if ($nameAtt) {
                            $arrDataAtt[] = new ShopProductAttribute(['name' => $nameAtt, 'attribute_value' => $rowGroup['add_value'][$key],  'attribute_group_id' => $group, 'status' => 1, 'product_id' => $product->id]);
                        }
                    }
                }
            }
            $product->attributes()->saveMany($arrDataAtt);
        }

        //Insert description
        $dataDes = [];
        $languages = $this->languages;
        foreach ($languages as $code => $value) {
            $dataDes[] = [
                'product_id' => $product->id,
                'lang' => $code,
                'name' => $descriptions[$code]['name'],
                'keyword' => $descriptions[$code]['keyword'],
                'description' => $descriptions[$code]['description'],
                'content' => $descriptions[$code]['content'] ?? '',
            ];
        }

        ShopProductDescription::insert($dataDes);

        //Insert sub mages
        if ($subImages) {
            $arrSubImages = [];
            foreach ($subImages as $key => $image) {
                if ($image) {
                    $arrSubImages[] = new ShopProductImage(['image' => $image]);
                }
            }
            $product->images()->saveMany($arrSubImages);
        }


        /*$dataRepair = [];
        $repairs = $data['repair'];*/
        if ($productRepairMap) {
            $productRepairMapData = [];
            if (count($productRepairMap)) {
                foreach ($productRepairMap['price'] as $key => $value) {
                    if ($value) {
                        $productRepairMapData[] = new ShopProductRepairPrice(['price_range' => $value, 'repair_id' => $productRepairMap['repair_id'][$key], 'product_id' => $product->id]);
                    }
                }
            }
            $product->repairPrice()->saveMany($productRepairMapData);
        }
        /*foreach ($repairs as $repair => $value) {
            $dataRepair[] = [
                'repair_id' => $value,
                'product_id'=> $product->id
            ];
        }
        ShopRepairProduct::insert($dataRepair);*/
        $prodName = '';
        foreach ($dataDes as $prod) {
            $prodName .= $prod['name'] . ' ';
        }
        /*Start Task added for new product*/
        $dataDes = [
            'is_complete' => (int) 0,
            'user_id' => Admin::user()->id,
            'title' => 'New Product (' . $prodName . ') Added',
            'description' => 'New Product added by ' . Admin::user()->name . '. Please Review.',
        ];
        $taskid = ShopTask::insertGetId($dataDes);
        $taskModel = ShopTask::find($taskid);

        $dataType = [];
        $dataType = [
            'task_id' => $taskid,
            'task_type' => 'product',
            'product_cat_id' => (int) $product->id,
        ];

        $checkContent = (new ShopEmailTemplate)->where('group', 'other')->where('status', 1)->first();
        $dataFind = [
            '/\{\{\$title\}\}/',
            '/\{\{\$username\}\}/',
            '/\{\{\$tasktitle\}\}/',
            '/\{\{\$taskdescription\}\}/',
            '/\{\{\$url\}\}/',
        ];
        $dataReplace = [
            trans('order.send_mail.task_title'),
            Admin::user()->name,
            // Manoj added 
            @$taskModel->title,
            @$taskModel->description,
            // Manoj added end
            // $taskid['title'],
            // $taskid['description'],
            env('APP_URL', 'http://localhost:8000') . '/prc_admin/product/edit/' . $product->id,
        ];

        $content = $checkContent->text;

        $content = preg_replace($dataFind, $dataReplace, $content);

        $dataView = [
            'content' => $content,
        ];
        $config = [
            'to' => Admin::user()->email,
            'subject' => 'NEW PRODUCT ADDED',
        ];

        try {

            Mail::send(new SendMail('templates.mail.order_success_to_admin', $dataView, $config, []));
        } catch (\Throwable $e) {
            //dd($e);
            sc_report("Sendmail view:" . PHP_EOL . $e->getMessage());
        }


        /*sc_send_mail($this->templatePath . '.mail.order_success_to_admin', $dataView, $config, []);*/

        ShopTaskTypeDetails::insert($dataType);
        /*End Task added for new product*/
        return redirect()->route('admin_product.index')->with('success', trans('product.admin.create_success'));
    }

    /**
     * Form edit
     */
    public function edit($id)
    {
        $product = ShopProduct::find($id);

        if ($product === null) {
            return 'no data';
        }

        // html select attribute
        $htmlProductAtrribute = '<tr><td><br><input type="text" name="attribute[attribute_group][name][]" value="attribute_name" class="form-control input-sm" placeholder="' . trans('product.admin.add_attribute_name') . '" /></td><td><br><input type="text" name="attribute[attribute_group][add_value][]" value="attribute_value" class="form-control input-sm" placeholder="' . trans('product.admin.add_attribute_place') . '"></td><td><br><span title="Remove" class="btn btn-flat btn-sm btn-danger removeAttribute"><i class="fa fa-times"></i></span></td></tr>';
        //end select attribute

        $data = [
            'title' => trans('product.admin.edit'),
            'subTitle' => '',
            'title_description' => '',
            'icon' => 'fa fa-pencil-square-o',
            'languages' => $this->languages,
            'product' => $product,
            'categories' => (new ShopCategory)->getTreeCategories(),
            'brands' => (new ShopBrand)->getList(),
            'repairs' => (new ShopRepair())->getList(),
            'attributeGroup' => $this->attributeGroup,
            'htmlProductAtrribute' => $htmlProductAtrribute,
        ];
        return view('admin.screen.edit_product')
            ->with($data);
    }

    /**
     * update status
     */
    public function postEdit($id)
    {
        $product = ShopProduct::find($id);

        $data = request()->all();



        $langFirst = array_key_first(sc_language_all()->toArray()); //get first code language active
        //$data['alias'] = !empty($data['alias'])?$data['alias']:$data['descriptions'][$langFirst]['name'];
        //$data['alias'] = sc_word_format_url($data['alias']);
        //$data['alias'] = sc_word_limit($data['alias'], 100);


        $arrValidation = [
            'sort' => 'numeric|min:0',
            'minimum' => 'numeric|min:0',
            'weight_class' => 'nullable|string|max:100',
            'length_class' => 'nullable|string|max:100',
            'weight' => 'nullable|numeric|min:0',
            'height' => 'nullable|numeric|min:0',
            'length' => 'nullable|numeric|min:0',
            'width' => 'nullable|numeric|min:0',
            'descriptions.*.name' => 'required|string|max:200',
            'descriptions.*.keyword' => 'nullable|string|max:200',
            'descriptions.*.description' => 'nullable|string',
            'category' => 'required',
            'alias' => 'required|regex:/(^([0-9A-Za-z\-_]+)$)/|unique:"' . ShopProduct::class . '",alias,' . $product->id . ',id|string|max:100',
        ];
        $arrMsg = [
            'descriptions.*.name.required' => trans('validation.required', ['attribute' => trans('product.name')]),
            'category.required' => trans('validation.required', ['attribute' => trans('product.category')]),
            'alias.regex' => trans('product.alias_validate'),
        ];

        $validator = Validator::make($data, $arrValidation, $arrMsg ?? []);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput($data);
        }
        //Edit

        $category = $data['category'] ?? [];
        $attribute = $data['attribute'] ?? [];
        $productRepairMap = $data['product'] ?? [];
        $dataUpdate = [
            'image' => $data['image'] ?? '',
            'brand_id' => $data['brand_id'] ?? 0,
            'alias' => $data['alias'],
            'status' => (!empty($data['status']) ? 1 : 0),
            'sort' => (int) $data['sort'],
            'comment' => $data['comment'],
        ];

        $product->update($dataUpdate);


        $product->descriptions()->delete();
        $dataDes = [];
        foreach ($data['descriptions'] as $code => $row) {
            $dataDes[] = [
                'product_id' => $id,
                'lang' => $code,
                'name' => $row['name'],
                'keyword' => $row['keyword'],
                'description' => $row['description'],
                'content' => $row['content'] ?? '',
            ];
        }
        ShopProductDescription::insert($dataDes);

        //Update category
        if ($category) {
            $product->categories()->detach();
            if (count($category)) {
                $product->categories()->attach($category);
            }
        }

        //update repair price range
        $product->repairPrice()->delete();
        if ($productRepairMap) {
            $productRepairMapData = [];
            if (count($productRepairMap)) {
                foreach ($productRepairMap['price'] as $key => $value) {
                    if ($value) {
                        $productRepairMapData[] = new ShopProductRepairPrice(['price_range' => $value, 'repair_id' => $productRepairMap['repair_id'][$key], 'product_id' => $product->id]);
                    }
                }
            }
            $product->repairPrice()->saveMany($productRepairMapData);
        }


        //Update attribute
        $product->attributes()->delete();
        if (count($attribute)) {
            $arrDataAtt = [];
            foreach ($attribute as $group => $rowGroup) {
                if (count($rowGroup)) {
                    foreach ($rowGroup['name'] as $key => $nameAtt) {
                        if ($nameAtt) {
                            $arrDataAtt[] = new ShopProductAttribute(['name' => $nameAtt, 'attribute_value' => $rowGroup['add_value'][$key],  'attribute_group_id' => $group, 'status' => 1, 'product_id' => $product->id]);
                        }
                    }
                }
            }
            $product->attributes()->saveMany($arrDataAtt);
        }

        /* $product->repairProduct()->delete();
        $dataRepair = [];
        $repairs = $data['repair'];

        foreach ($repairs as $repair => $value) {
            $dataRepair[] = [
                'repair_id' => $value,
                'product_id'=> $product->id
            ];
        }
        ShopRepairProduct::insert($dataRepair);*/

        return redirect()->route('admin_product.index')->with('success', trans('product.admin.edit_success'));
    }

    /*
Delete list Item
Need mothod destroy to boot deleting in model
 */
    public function deleteList()
    {
        if (!request()->ajax()) {
            return response()->json(['error' => 1, 'msg' => 'Method not allow!']);
        } else {
            $ids = request('ids');
            $arrID = explode(',', $ids);
            $arrCantDelete = [];
            foreach ($arrID as $key => $id) {
                $product = ShopProduct::find($id);
                $product->descriptions()->delete();
                $product->categories()->detach();
                $product->attributes()->delete();
            }
            ShopProduct::destroy($arrID);
            return response()->json(['error' => 0, 'msg' => 'Deleted Successfully !!!']);
        }
    }

    public function getProductsByCategory($category)
    {
        $tableDescription = (new ShopProductDescription)->getTable();
        $tableProduct = (new ShopProduct)->getTable();
        $tableCategory = (new ShopProductCategory)->getTable();

        $obj = (new ShopProduct)
            ->leftJoin($tableDescription, $tableDescription . '.product_id', $tableProduct . '.id')
            ->where($tableDescription . '.lang', sc_get_locale());

        $obj = $obj->leftJoin($tableCategory, $tableCategory . '.product_id', $tableProduct . '.id')
            ->where($tableCategory . '.category_id', $category);
        return $obj->get();
    }
}

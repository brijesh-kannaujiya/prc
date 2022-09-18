<?php
#app/Http/Admin/Controllers/ShopRepairController.php
namespace App\Admin\Controllers;

use App\Http\Controllers\Controller;
use App\Models\ShopBrand;
use App\Models\ShopProduct;
use App\Models\ShopRepair;
use App\Models\ShopRepairProduct;
use App\Models\ShopLanguage;
use Illuminate\Http\Request;
use Validator;

class ShopRepairController extends Controller
{
    public $languages;

    public function __construct()
    {
        $this->languages = ShopLanguage::getList();

    }

    public function index()
    {
        $data = [
            'title' => trans('repair.admin.list'),
            'subTitle' => '',
            'icon' => 'fa fa-indent',
            'urlDeleteItem' => route('admin_repair.delete'),
            'removeList' => 1, // 1 - Enable function delete list item
            'buttonRefresh' => 1, // 1 - Enable button refresh
            'buttonSort' => 1, // 1 - Enable button sort
            'buttonFilter' => 0, // 1 - Enable button filter
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
            'id' => trans('repair.id'),
            'image' => trans('repair.image'),
            'title' => trans('repair.title'),
            'description' => trans('repair.description'),
            'status'=>trans('repair.status'),
            'action' => trans('repair.admin.action'),
        ];
        $sort_order = request('sort_order') ?? 'id_desc';
        $keyword = request('keyword') ?? '';
        $arrSort = [
            'id__desc' => trans('repair.admin.sort_order.id_desc'),
            'id__asc' => trans('repair.admin.sort_order.id_asc'),
            'title__desc' => trans('repair.admin.sort_order.title_desc'),
            'title__asc' => trans('repair.admin.sort_order.title_asc'),
        ];
        $obj = new ShopRepair();

        /*$obj = $obj
            ->leftJoin(SC_DB_PREFIX.'repair_product', SC_DB_PREFIX.'repair_product.repair_id', SC_DB_PREFIX.'shop_repair.id');*/
       /* if ($sort_order && array_key_exists($sort_order, $arrSort)) {
            $field = explode('__', $sort_order)[0];
            $sort_field = explode('__', $sort_order)[1];
            $obj = $obj->orderBy($field, $sort_field);

        } else {
            $obj = $obj->orderBy('id', 'desc');
        }*/
        $dataTmp = $obj->paginate(20);
        $dataTr = [];
        foreach ($dataTmp as $key => $row) {

            $dataTr[] = [
                'id' => $row['id'],
                'image' => sc_image_render($row->getThumb(), '50px', '50px', $row['title']),
                'title' => $row['title'],
                'description' => $row['description'],
                'status' => $row['status'] ? '<span class="label label-success">ON</span>' : '<span class="label label-danger">OFF</span>',
                'action' => '
                    <a href="' . route('admin_repair.edit', ['id' => $row['id']]) . '"><span title="' . trans('repair.admin.edit') . '" type="button" class="btn btn-flat btn-primary"><i class="fa fa-edit"></i></span></a>&nbsp;

                    <span onclick="deleteItem(' . $row['id'] . ');"  title="' . trans('admin.delete') . '" class="btn btn-flat btn-danger"><i class="fa fa-trash"></i></span>'
                ,
            ];
        }

        $data['listTh'] = $listTh;
        $data['dataTr'] = $dataTr;
        $data['pagination'] = $dataTmp->appends(request()->except(['_token', '_pjax']))->links('admin.component.pagination');
        $data['resultItems'] = trans('repair.admin.result_item', ['item_from' => $dataTmp->firstItem(), 'item_to' => $dataTmp->lastItem(), 'item_total' => $dataTmp->total()]);


//menuRight
        $data['menuRight'][] = '<a href="' . route('admin_repair.create') . '" class="btn  btn-success  btn-flat" title="New" id="button_create_new">
        <i class="fa fa-plus" title="'.trans('admin.add_new').'"></i>
        </a>';
//=menuRight

//menuSort
        $optionSort = '';
        foreach ($arrSort as $key => $status) {
            $optionSort .= '<option  ' . (($sort_order == $key) ? "selected" : "") . ' value="' . $key . '">' . $status . '</option>';
        }

        $data['urlSort'] = route('admin_repair.index');
        $data['optionSort'] = $optionSort;
//=menuSort

//menuSearch
        $data['topMenuRight'][] = '
                <form action="' . route('admin_repair.index') . '" id="button_search">
                   <div onclick="$(this).submit();" class="btn-group pull-right">
                           <a class="btn btn-flat btn-primary" title="Refresh">
                              <i class="fa  fa-search"></i>
                           </a>
                   </div>
                   <div class="btn-group pull-right">
                         <div class="form-group">
                           <input type="text" name="keyword" class="form-control" placeholder="' . trans('repair.admin.search_place') . '" value="' . $keyword . '">
                         </div>
                   </div>
                </form>';
//=menuSearch

        return view('admin.screen.list')
            ->with($data);
    }

/**
 * Form create new order in admin
 * @return [type] [description]
 */
    public function create()
    {

        $data = [
            'title' => trans('repair.admin.add_new_title'),
            'subTitle' => '',
            'title_description' => '',
            'icon' => 'fa fa-pencil-square-o',
            'languages' => $this->languages,
            'repair' => '',
            'product'=>'',
            'products' => (new ShopProduct())->getArrayProductName(),
            'url_action' => route('admin_repair.create'),

        ];
        return view('admin.screen.repair')
            ->with($data);
    }

/**
 * Post create new order in admin
 * @return [type] [description]
 */
    public function postCreate()
    {
        $data = request()->all();

        $data['alias'] = !empty($data['alias'])?$data['alias']:$data['title'];
        $data['alias'] = sc_word_format_url($data['alias']);
        $data['alias'] = sc_word_limit($data['alias'], 100);


        $validator = Validator::make($data, [
            'image' => 'required',
            'alias' => 'required|regex:/(^([0-9A-Za-z\-_]+)$)/|unique:"'.ShopRepair::class.'",alias|string|max:100',
            'title' => 'required|string|max:200',
            'keyword' => 'nullable|string|max:200',
            'description' => 'nullable|string|max:300',
        ]);
        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput($data);
        }

        $dataInsert = [

            'image' => $data['image'],
            'alias' => $data['alias'],
            'title' => $data['title'],
            'description' => $data['description'],
            'content' => $data['content'],
            'status' => !empty($data['status']) ? 1 : 0,
            'keyword' => $data['keyword'],

        ];
        $id = ShopRepair::insertGetId($dataInsert);
        $dataProduct = [];
        $products = $data['product'];

        foreach ($products as $prod => $value) {
            $dataProduct[] = [
                'repair_id' => $id,
                'product_id'=> $value
            ];
        }
        ShopRepairProduct::insert($dataProduct);

        return redirect()->route('admin_repair.index')->with('success', trans('repair.admin.create_success'));

    }

/**
 * Form edit
 */
    public function edit($id)
    {
        $repair = ShopRepair::find($id);
        if ($repair === null) {
            return 'no data';
        }
        $data = [
            'title' => trans('repair.admin.edit'),
            'subTitle' => '',
            'title_description' => '',
            'icon' => 'fa fa-pencil-square-o',
            'languages' => $this->languages,
            'repair' => $repair,
            'product'=>'',
            'products' => (new ShopProduct())->getArrayProductName(),
            'url_action' => route('admin_repair.edit', ['id' => $repair['id']]),
        ];
        return view('admin.screen.repair')
            ->with($data);
    }

/**
 * update status
 */
    public function postEdit($id)
    {
        $repair = ShopRepair::find($id);
        $data = request()->all();

        $data['alias'] = !empty($data['alias'])?$data['alias']:$data['title'];
        $data['alias'] = sc_word_format_url($data['alias']);
        $data['alias'] = sc_word_limit($data['alias'], 100);

        $validator = Validator::make($data, [
            'image' => 'required',
            'alias' => 'required|regex:/(^([0-9A-Za-z\-_]+)$)/|unique:"'.ShopRepair::class.'",alias|string|max:100',
            'title' => 'required|string|max:200',
            'keyword' => 'nullable|string|max:200',
            'description' => 'nullable|string|max:300',
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput($data);
        }
//Edit

        $dataUpdate = [
            'id'=>$id,
            'image' => $data['image'],
            'alias' => $data['alias'],
            'title' => $data['title'],
            'description' => $data['description'],
            'content' => $data['content'],
            'status' => !empty($data['status']) ? 1 : 0,
            'keyword' => $data['keyword'],
        ];

        $repair->update($dataUpdate);
        $repair->repairProduct()->delete();
        $dataProduct = [];
        $products = $data['product'];
        foreach ($products as $prod => $value) {
            $dataProduct[] = [
                'repair_id' => $id,
                'product_id'=> $value
            ];
        }
        ShopRepairProduct::insert($dataProduct);

//
        return redirect()->route('admin_repair.index')->with('success', trans('repair.admin.edit_success'));

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
            ShopRepair::destroy($arrID);
            return response()->json(['error' => 0, 'msg' => '']);
        }
    }

}

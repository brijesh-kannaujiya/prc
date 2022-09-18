<?php
#app/Http/Admin/Controllers/GsmArenaController.php
namespace App\Admin\Controllers;

use App\Http\Controllers\Controller;
use App\Models\ShopAttributeGroup;
use App\Models\ShopBrand;
use App\Models\ShopCategory;
use App\Models\ShopLanguage;
use App\Models\ShopProductAttribute;
use App\Models\ShopRepair;
use Validator;
use App\Plugins\GsmArena;

class GsmArenaController extends Controller
{

    public $languages,$attributeGroup;

    public function __construct()
    {
        $this->languages = ShopLanguage::getList();
        $this->attributeGroup = ShopAttributeGroup::getList();
    }


    public function index()
    {
        return view('admin.screen.gsmarena');
    }

    public function addProduct(){
        // html select attribute
        $htmlProductAtrribute = '<tr><td><br><input type="text" name="attribute[attribute_group][name][]" value="attribute_name" class="form-control input-sm" placeholder="' . trans('product.admin.add_attribute_name') . '" /></td><td><br><input type="text" name="attribute[attribute_group][add_value][]" value="attribute_value" class="form-control input-sm" placeholder="' . trans('product.admin.add_attribute_place') . '"></td><td><br><span title="Remove" class="btn btn-flat btn-sm btn-danger removeAttribute"><i class="fa fa-times"></i></span></td></tr>';
        //end select attribute

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
            //'htmlMoreImage' => $htmlMoreImage,
        ];
        return view('admin.screen.gsmarena_add_product')->with($data);
    }

    public function getProduct($id){

        $gsm = new GsmArena\Gsm();
// Return ARRAY
        if (!empty($_GET['query'])) {
            $data = $gsm->search($_GET['query']);
        } elseif (!empty($_GET['slug'])) {
            $data = $gsm->detail($_GET['slug']);
        } elseif (!empty($_GET['brands'])) {
            $data = $gsm->getBrands();
        } else {
            $data = array(
                "status" => "error"
            );
        }
// JSON
        header('Content-Type: application/json');

// Tanda * berarti memberi hak akses kesemua host/domain untuk mengkonsusmi data JSON ini via AJAX.
// Jika sobat hanya ingin domain sobat saja yang bisa mengkonsusmi data JSON ini via AJAX tinggal rubah seperti ini:
// header('Access-Control-Allow-Origin: http://domain-sobat.com');
        header('Access-Control-Allow-Origin: *');

// Convert ARRAY to JSON
        echo json_encode($data, JSON_PRETTY_PRINT);
    }


    public function postAddAttribute()
    {
        $data = request()->all();
        $dataOrigin = request()->all();
        $validator = Validator::make($dataOrigin, [
            'name' => 'required',
            'attribute_value' => 'required'
        ], [
            'name.required' => trans('validation.required'),
            'attribute_value.required' => trans('validation.required'),
        ]);

        if ($validator->fails()) {
            // dd($validator->messages());
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }
//Create new order
        $dataInsert = [
            'name' => $data['name'],
            'attribute_value' => $data['attribute_value'],
        ];
        ShopProductAttribute::create($dataInsert);
        return with('success', trans('attribute_group.admin.create_success'));

    }

}

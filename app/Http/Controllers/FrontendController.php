<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductIndexRequest;
use App\Models\ShopAttributeGroup;
use App\Models\ShopBrand;
use App\Models\ShopCategory;
use App\Models\ShopContactUs;
use App\Models\ShopFaq;
use App\Models\ShopNews;
use App\Models\ShopProduct;
use App\Models\ShopProductAttribute;
use App\Models\ShopProductCategory;
use App\Models\ShopProductDescription;
use App\Models\ShopProductRepairPrice;
use App\Models\ShopRepair;
use App\WebwilaHelpers\Bz;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Vanilo\Category\Contracts\Taxon;
use Vanilo\Category\Models\TaxonomyProxy;
use Vanilo\Framework\Search\ProductFinder;
use Vanilo\Product\Contracts\Product;
use Vanilo\Properties\Models\PropertyProxy;

class FrontendController extends Controller
{

    public function index()
    {
        // Manoj by pass view for product listing page 
        return Bz::showbrand();
        // End Manoj by pass view 

        $repairs = (new ShopRepair())->getList([], ['sortBy' => 'sort'], ['step' => 0, 'limit' => 5]);
        $itemsList = (new ShopBrand)->getData();
        $newslist = (new ShopNews)
            ->setLimit(3)
            ->setPaginate()
            ->getData();
        return view('templates.prc.mainpage.home', ['home' => 1, 'itemsList' => $itemsList, 'repairs' => $repairs, 'newslist' => $newslist]);
    }

    /** @var ProductFinder */
    public function showService()
    {
        return view('templates.prc.mainpage.service', ['service' => 1]);
    }
    public function showLiquidDamageService()
    {
        $repairList = (new ShopRepair())->getList([], ['sortBy' => 'sort'], ['step' => 0, 'limit' => 5]);
        $itemsList = (new ShopBrand)->getData();
        return view('templates.prc.mainpage.liquid_damage', ['repairlist' => $repairList, 'itemsList' => $itemsList,]);
    }
    public function showMailInRepairs()
    {
        $repairList = (new ShopRepair())->getList([], ['sortBy' => 'sort'], ['step' => 0, 'limit' => 5]);
        $itemsList = (new ShopBrand)->getData();
        return view('templates.prc.mainpage.mail_in_repair', ['repairlist' => $repairList, 'itemsList' => $itemsList]);
    }
    public function showLaptopRepairs()
    {
        $repairList = (new ShopRepair())->getList([], ['sortBy' => 'sort'], ['step' => 0, 'limit' => 5]);
        $itemsList = (new ShopBrand)->getData();
        return view('templates.prc.mainpage.laptop_repair', ['repairlist' => $repairList, 'itemsList' => $itemsList]);
    }
    public function showMackbookRepairs()
    {
        $repairList = (new ShopRepair())->getList([], ['sortBy' => 'sort'], ['step' => 0, 'limit' => 5]);
        $itemsList = (new ShopBrand)->getData();
        return view('templates.prc.mainpage.mackbook_repair', ['repairlist' => $repairList, 'itemsList' => $itemsList]);
    }
    public function showDataRecoveryRepairs()
    {
        $repairList = (new ShopRepair())->getList([], ['sortBy' => 'sort'], ['step' => 0, 'limit' => 5]);
        $itemsList = (new ShopBrand)->getData();
        return view('templates.prc.mainpage.datarecovery_repair', ['repairlist' => $repairList, 'itemsList' => $itemsList]);
    }
    public function showMotherboardRepairs()
    {
        $repairList = (new ShopRepair())->getList([], ['sortBy' => 'sort'], ['step' => 0, 'limit' => 5]);
        $itemsList = (new ShopBrand)->getData();
        return view('templates.prc.mainpage.motherboard_repair', ['repairlist' => $repairList, 'itemsList' => $itemsList]);
    }
    public function showGameConsoleRepairs()
    {
        $repairList = (new ShopRepair())->getList([], ['sortBy' => 'sort'], ['step' => 0, 'limit' => 5]);
        $itemsList = (new ShopBrand)->getData();
        return view('templates.prc.mainpage.gameconsole_repair', ['repairlist' => $repairList, 'itemsList' => $itemsList]);
    }
    public function showB2BRepairs()
    {
        $repairList = (new ShopRepair())->getList([], ['sortBy' => 'sort'], ['step' => 0, 'limit' => 5]);
        $itemsList = (new ShopBrand)->getData();
        return view('templates.prc.mainpage.b2b_repair', ['repairlist' => $repairList, 'itemsList' => $itemsList]);
    }
    public function showFaq()
    {
        $faqs = (new ShopFaq())->buildQuery()->where('status', 1)->get();
        $itemsList = (new ShopBrand)->getData();
        return view('templates.prc.mainpage.faq', ['faqs' => $faqs, 'itemsList' => $itemsList]);
    }
    public function showServiceInsurance()
    {
        $repairList = (new ShopRepair())->getList([], ['sortBy' => 'sort'], ['step' => 0, 'limit' => 5]);
        $itemsList = (new ShopBrand)->getData();
        return view('templates.prc.mainpage.service_insurance', ['repairlist' => $repairList, 'itemsList' => $itemsList]);
    }
    public function showSellYourBrokenDevice()
    {
        $repairList = (new ShopRepair())->getList([], ['sortBy' => 'sort'], ['step' => 0, 'limit' => 5]);
        $itemsList = (new ShopBrand)->getData();
        return view('templates.prc.mainpage.sellyour_device', ['repairlist' => $repairList, 'itemsList' => $itemsList]);
    }
    public function showPhoneUnlocking()
    {
        $repairList = (new ShopRepair())->getList([], ['sortBy' => 'sort'], ['step' => 0, 'limit' => 5]);
        $itemsList = (new ShopBrand)->getData();
        return view('templates.prc.mainpage.phone_unlocking', ['repairlist' => $repairList, 'itemsList' => $itemsList]);
    }

    public function showCasr()
    {
        $repairList = (new ShopRepair())->getList([], ['sortBy' => 'sort'], ['step' => 0, 'limit' => 5]);
        $itemsList = (new ShopBrand)->getData();
        return view('templates.newprc.mainpage.casr', ['repairlist' => $repairList, 'itemsList' => $itemsList]);
    }

    public function showB2b()
    {
        $repairList = (new ShopRepair())->getList([], ['sortBy' => 'sort'], ['step' => 0, 'limit' => 5]);
        $itemsList = (new ShopBrand)->getData();
        return view('templates.newprc.mainpage.b2b', ['repairlist' => $repairList, 'itemsList' => $itemsList]);
    }

    public function showAboutus()
    {
        return view('templates.prc.mainpage.aboutus', ['aboutus' => 1]);
    }


    public function showContact()
    {
        return view('templates.prc.mainpage.contact', ['success' => '',]);
    }

    public function showRepair(string $taxonomyName = null)
    {
        $taxonomies = TaxonomyProxy::get()->sort();
        return view('repair', ['taxonomies' => $taxonomies, 'repair' => 1]);
    }

    /*  public function index(string $taxonomyName = null)
    {
        $taxonomies = TaxonomyProxy::get()->sort();
        return view('index',['taxonomies' => $taxonomies]);
    } */

    public function showCommonRepair()
    {
        return view('templates.prc.commonrepair');
    }

    public function repair()
    {
        $itemsList = (new ShopBrand)->getData();
        return view('templates.newprc.mainpage.repair', ['itemsList' => $itemsList, 'repair' => 1]);
    }

    public function showbrand()
    {
        // Manoj by pass view for product listing page 
        return Bz::showbrand();
        // End Manoj by pass view 

        $itemsList = (new ShopBrand)->getData();
        return view('templates.prc.mainpage.product.brand', ['itemsList' => $itemsList, 'repair' => 1]);
    }

    /* public function showbrand()
    {
       $itemsList = (new ShopBrand)->getData();
        return view('templates.prc.product.brand',['itemsList' => $itemsList]);
    }*/

    public function showCat($brandId = null)
    {
        $itemsList = (new ShopBrand)->getData();
        $brand = (new ShopBrand())->getDetail($brandId, "alias");
        $catList = (new ShopCategory())->buildQuery()->where('brand_id', $brand->id)->get();
        return view('templates.prc.mainpage.product.cat', ['catList' => $catList, 'brand' => $brand, 'itemsList' => $itemsList, 'repair' => 1]);
    }
    public function getCatByBrand($id)
    {
        $tableBrand = (new ShopBrand)->getTable();
        $tableCat = (new ShopCategory)->getTable();


        if (!empty($_GET['brandId'])) {
            $data = $_GET['brandId'];
        }
        // dd($data);
        $catList = ShopCategory::with('brand', 'description')
            ->where('brand_id', $data)->get();
        return $catList;
    }

    public function showCategory($brandId = null, $category = null)
    {
        $itemsList = (new ShopBrand)->getData();
        $brand = (new ShopBrand())->getDetail($brandId, "alias");
        $cat = (new ShopCategory())->getDetail($category, "alias");
        $tableDescription = (new ShopProductDescription)->getTable();
        $tableProduct = (new ShopProduct)->getTable();
        $tableCategory = (new ShopProductCategory)->getTable();
        $obj = (new ShopProduct)
            ->leftJoin($tableDescription, $tableDescription . '.product_id', $tableProduct . '.id')
            ->where($tableDescription . '.lang', sc_get_locale());

        $obj = $obj->leftJoin($tableCategory, $tableCategory . '.product_id', $tableProduct . '.id')
            ->where($tableCategory . '.category_id', $cat->id);
        if ($cat->product_sort_by) {
            $productList = $obj->sort($cat->product_sort_by, $cat->product_sort_type)->get();
        } else {
            $productList = $obj->sort('sort', 'asc')->sort('id', 'desc')->get();
        }
        return view('templates.prc.mainpage.product.model', ['productList' => $productList, 'category' => $cat, 'brand' => $brand, 'itemsList' => $itemsList, 'repair' => 1]);
    }

    public function  showProduct($product)
    {
        $prod = (new ShopProduct())->getDetail($product, "alias");
        $cat = (new ShopCategory())->getDetail($prod->category_id);
        $brand = (new ShopBrand())->getDetail(@$cat->brand_id);
        $attribute = ShopProductAttribute::query()->leftJoin((new ShopAttributeGroup)->getTable(), (new ShopAttributeGroup)->getTable() . '.id', (new ShopProductAttribute())->getTable() . '.attribute_group_id')->where('product_id', $prod->id)->get();
        $prodrepairs = ShopProductRepairPrice::query()->leftJoin((new ShopRepair)->getTable(), (new ShopRepair)->getTable() . '.id', (new ShopProductRepairPrice())->getTable() . '.repair_id')->where('product_id', $prod->id)->get();
        $groupAtt = array();
        foreach ($attribute as $entity) {
            if (!isset($groupAtt[$entity->attribute_name])) {
                $groupAtt[$entity->attribute_name] = array();
            }

            $groupAtt[$entity->attribute_name][] = $entity;
        }
        $itemsList = (new ShopBrand)->getData();
        //dd($prodrepairs);
        return view('templates.prc.mainpage.product.show', ['itemsList'=>$itemsList,'product' => $prod, 'brand' => $brand, 'cat' => $cat, 'listAtt' => $attribute, 'groupAtt' => $groupAtt, 'prodrepairs' => $prodrepairs]);
    }

    public function siteSearch()
    {
    }


    public function postContactUs()
    {
        $data = request()->all();
        $dataOrigin = request()->all();

        $messages = [
            'first_name.required' => 'The First Name Field Is Required.',
            'mobile_no.required' => 'The Telephone Number Field Is Required.',
            'mobile_no.regex' => 'The Telephone Number Field format is invalid.',
            'mail_id.required' => 'The Email Address Field Is Required.',
            'mail_id.email' => 'The Email Address Field  must be a valid email address. '
        ];
        $validator = Validator::make($dataOrigin, [
            'first_name' => 'required|max:100|min:3',
            'mobile_no' => 'required|numeric',
            'mail_id' => 'required|string|email|max:255',
        ], $messages);
        if ($validator->fails()) {
            // dd($validator->messages());
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }
        $dataInsert = [
            'first_name' => $data['first_name'],
            'last_name' => $data['last_name'],
            'mobile_no' => $data['mobile_no'],
            'mail_id' => $data['mail_id'],
            'msg' => $data['msg'],
        ];
        ShopContactUs::create($dataInsert);
        return redirect()->route('frontend.contact')->with(['success' => trans('prccontact.admin.create_success')]);
    }
}

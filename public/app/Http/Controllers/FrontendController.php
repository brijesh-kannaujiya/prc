<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductIndexRequest;
use App\Models\ShopAttributeGroup;
use App\Models\ShopBrand;
use App\Models\ShopCategory;
use App\Models\ShopProduct;
use App\Models\ShopProductAttribute;
use App\Models\ShopProductCategory;
use App\Models\ShopProductDescription;
use App\Models\ShopRepair;
use Vanilo\Category\Contracts\Taxon;
use Vanilo\Category\Models\TaxonomyProxy;
use Vanilo\Framework\Search\ProductFinder;
use Vanilo\Product\Contracts\Product;
use Vanilo\Properties\Models\PropertyProxy;

class FrontendController extends Controller
{

    public function index()
    {
            return view('templates.prc.index');
    }

    /** @var ProductFinder */
    public function showService()
    {
        return view('templates.newprc.mainpage.service');
    }

    public function showCasr()
    {
        return view('templates.newprc.mainpage.casr');
    }

    public function showB2b()
    {
        return view('templates.newprc.mainpage.b2b');
    }

    public function showAboutus()
    {
        return view('templates.newprc.mainpage.aboutus');
    }

    public function showFaq()
    {
        return view('templates.prc.faq');
    }

    public function showContact()
    {
        return view('templates.newprc.mainpage.contact');
    }

    public function showRepair(string $taxonomyName = null)
    {
        $taxonomies = TaxonomyProxy::get()->sort();
        return view('repair',['taxonomies' => $taxonomies]);
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

    public function showbrand()
    {
       $itemsList = (new ShopBrand)->getData();
        return view('templates.prc.product.brand',['itemsList' => $itemsList]);
    }

    public function showCat($brandId = null)
    {
        $brand = (new ShopBrand())->getDetail($brandId,"alias");
        $catList = (new ShopCategory())->buildQuery()->where('brand_id', $brand->id)->get();
        return view('templates.prc.product.taxon',['catList' => $catList,'brand' => $brand]);
    }

    public function showCategory($brandId = null,$category = null)
    {
        $brand = (new ShopBrand())->getDetail($brandId,"alias");
        $cat = (new ShopCategory())->getDetail($category,"alias");
        $tableDescription = (new ShopProductDescription)->getTable();
        $tableProduct = (new ShopProduct)->getTable();
        $tableCategory = (new ShopProductCategory)->getTable();
        $obj = (new ShopProduct)
            ->leftJoin($tableDescription, $tableDescription . '.product_id', $tableProduct . '.id')
            ->where($tableDescription . '.lang', sc_get_locale());

        $obj = $obj->leftJoin($tableCategory, $tableCategory . '.product_id', $tableProduct . '.id')
            ->where($tableCategory.'.category_id', $cat->id);
        if($cat->product_sort_by){
            $productList = $obj->sort($cat->product_sort_by, $cat->product_sort_type)->get();
        }else {
            $productList = $obj->sort('sort', 'asc')->sort('id', 'desc')->get();
        }
        return view('templates.prc.product.oldrepair',['productList' => $productList,'cat'=>$cat,'brand' => $brand]);
    }

    public function  showProduct($product){
        $prod = (new ShopProduct())->getDetail($product,"alias");
        $cat = (new ShopCategory())->getDetail($prod->category_id);
        $brand = (new ShopBrand())->getDetail($cat->brand_id);
        $repairs = $prod->repairs()->get();
        $attribute = ShopProductAttribute::query()->leftJoin((new ShopAttributeGroup)->getTable(), (new ShopAttributeGroup)->getTable() . '.id', (new ShopProductAttribute())->getTable() . '.attribute_group_id')->where('product_id',$prod->id)->get();
        $groupAtt = array();
        foreach($attribute as $entity)
        {
            if(!isset($groupAtt[$entity->attribute_name]))
            {
                $groupAtt[$entity->attribute_name] = array();
            }

            $groupAtt[$entity->attribute_name][] = $entity;
        }
        return view('templates.newprc.mainpage.product.show', ['product' => $prod,'brand'=>$brand,'cat' => $cat,'listAtt' =>$attribute,'groupAtt'=>$groupAtt,'repairs'=>$repairs]);
    }
}

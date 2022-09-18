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
use App\Models\ShopProductRepairPrice;
use App\Models\ShopRepair;
use Vanilo\Category\Contracts\Taxon;
use Vanilo\Category\Models\TaxonomyProxy;
use Vanilo\Framework\Search\ProductFinder;
use Vanilo\Product\Contracts\Product;
use Vanilo\Properties\Models\PropertyProxy;

class RepairController extends Controller
{

    public function showRepair($repair)
    {
        $itemsList = (new ShopBrand)->getData();
        $repairList = (new ShopRepair())->getList([],['sortBy'=>'sort'], ['step' => 0, 'limit' => 5]);
        $repair = (new ShopRepair())->getDetail($repair,"alias");
        return view('templates.prc.mainpage.product.repair',['itemsList' => $itemsList,'repair' => $repair,'repairlist'=>$repairList,]);
    }

    /**
     * @param $product
     * @param $repair
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     * showBrandRepair
     * Single repair listing page
     */
    public function showBrandRepair($product,$repair)
    { 

        $itemsList = (new ShopBrand)->getData();
        $prod = (new ShopProduct())->getDetail($product,"alias");
        $repair = (new ShopRepair())->getDetail($repair,"alias");
        $repairList = (new ShopRepair())->getList([],['sortBy'=>'sort'], ['step' => 0, 'limit' => 5]);
        $productrepairprice = (new ShopProductRepairPrice)->where('product_id', (int)$prod->id);
        $productrepairprice = $productrepairprice->where('repair_id', (int)$repair->id)->get()->first();
        $repairs = ShopProductRepairPrice::query()
            ->leftJoin((new ShopRepair)->getTable(), (new ShopRepair)->getTable() . '.id', (new ShopProductRepairPrice())->getTable() . '.repair_id')
            ->where('product_id',$prod->id)->get();
        return view('templates.prc.mainpage.product.repair',['itemsList' => $itemsList,'productrepairprice'=>$productrepairprice,'repair' => $repair,'product'=>$prod,'repairlist'=>$repairList,'repairs'=>$repairs]);
    }


}

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

class RepairController extends Controller
{

    public function showRepair($repair)
    {
        $repair = (new ShopRepair())->getDetail($repair,"alias");
        return view('templates.prc.product.repair',['repair' => $repair]);
    }


}

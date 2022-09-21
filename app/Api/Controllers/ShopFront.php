<?php

namespace App\Api\Controllers;

use App\Http\Controllers\GeneralController;
use Illuminate\Http\Request;
use App\Models\ShopBrand;
use App\Models\ShopCategory;
use App\Models\ShopProduct;
use App\Models\ShopSupplier;
use App\Models\ShopProductCategory;
use App\Models\ShopProductDescription;

class ShopFront extends GeneralController
{
    /**
     * display list category root (parent = 0)
     * @return [json]
     */
    public function allCategory()
    {
        $itemsList = (new ShopCategory)
            ->with('descriptions')
            ->jsonPaginate();
        return response()->json($itemsList, 200);
    }

    /**
     * Category detail: list category child
     * @param  [int] $id
     * @return [json]
     */
    public function categoryDetail($id)
    {
        $category = (new ShopCategory)
            ->with('descriptions')
            ->find($id);
        if ($category) {
            return response()->json($category, 200);
        } else {
            return response()->json([], 404);
        }
    }

    /**
     * All products
     * @return [json]
     */
    public function allProduct()
    {
        $products = (new ShopProduct)
            ->with('images')
            ->with('descriptions')
            ->with('promotionPrice')
            ->with('attributes')
            ->jsonPaginate();
        return response()->json($products, 200);
    }

    /**
     * product detail
     * @param  [int] $id
     * @return [json]
     */
    public function productDetail($id)
    {
        $product = (new ShopProduct)
            ->with('images')
            ->with('descriptions')
            ->with('promotionPrice')
            ->with('attributes')
            ->find($id);
        if ($product) {
            return response()->json($product, 200);
        } else {
            return response()->json('Product not found', 404);
        }
    }

    public function allBrand()
    {
        $itemsList = (new ShopBrand)
            ->jsonPaginate();
        return response()->json($itemsList, 200);
    }

    public function brandDetail($id)
    {
        $brand = (new ShopBrand)->find($id);
        if ($brand) {
            return response()->json($brand, 200);
        } else {
            return response()->json('Not found', 404);
        }
    }

    public function allSupplier()
    {
        $itemsList = (new ShopSupplier)->jsonPaginate();
        return response()->json($itemsList, 200);
    }

    public function supplierDetail($id)
    {
        $supplier = (new ShopSupplier)->find($id);
        if ($supplier) {
            return response()->json($supplier, 200);
        } else {
            return response()->json('Not found', 404);
        }
    }

    public function getProductByBrandAndCategory(Request $request)
    { 
        // dd($request->all());
        $catId = $request->catid;
        $filter = $request->filter;
        $page = ($request->page) ? $request->page : 1;
        $tableDescription = (new ShopProductDescription)->getTable();
        $tableProduct = (new ShopProduct)->getTable(); 
        // dd($tableProduct);
        $tableCategory = (new ShopProductCategory)->getTable();
        $obj = (new ShopProduct)
            ->leftJoin($tableDescription, $tableDescription . '.product_id', $tableProduct . '.id')
            ->where($tableDescription . '.lang', sc_get_locale());
        // ->where('brand_id',$brand_id);
        if (isset($filter) && $filter != "") {
            $obj->where($tableDescription . '.name', 'like', '%' . $filter . '%');
            $obj->orWhere($tableProduct . '.comment', 'like', '%' . $filter . '%');
        }
        $obj = $obj->leftJoin($tableCategory, $tableCategory . '.product_id', $tableProduct . '.id');
        // $obj->where($tableCategory . '.category_id', $category_id );
        if (isset($catId)) {
            $obj->where($tableCategory . '.category_id', $catId);
        }


        $productList = $obj->sort('sort', 'asc')->sort('id', 'desc')->paginate(18, ['*'], 'page', $page);;

        // $siteURl = "https://prc.repair/prc/";
        $siteURl = url('prc/');
        $res = array();
        $res['succ'] = 1;
        $res['pagination'] = "";
        $res['cardHtml']  = "";
        // make loop of html
        $cardHtml = "";
        if ($productList->count()) {
            ob_start();
            foreach ($productList as $eachProduct) {
                ?>
                <div class="repair-item mk-repair-item-no-border mk-repair-item-no-margin col-xl-4 col-lg-4 col-md-4 col-sm-6 col-6">
                    <div class="mk-repair-item-wrap">
                        <div class="image-item">
                            <a href="<?php echo $siteURl; ?>/product/<?php echo $eachProduct->alias; ?>"><img src="<?php echo $eachProduct->image; ?>" alt="<?php echo $eachProduct->name ?>"></a>
                        </div>
                        <h3><a href="<?php echo $siteURl; ?>/product/<?php echo $eachProduct->alias; ?>"><?php echo $eachProduct->name ?></a></h3>
                    </div>
                </div>
                <?php
            }
            $cardHtml .= ob_get_clean();

            // echo run pagination
            ob_start();
            echo $productList->links();
            $res['pagination'] = ob_get_clean();
            // end pagination
        } else {
            $res['succ'] = false;
        }
        if($catId){
        $brandes = ShopCategory::where('id',$catId)->first(); 
         $barndname = ShopBrand::where('id',$brandes->brand_id)->first();   
         $barndname = $barndname->name;
         $category_name = $brandes->alias;
         $category_id = $brandes->brand_id;
        }else{
            $barndname = null;
            $category_name = Null;
            $category_id = Null;
        }
        $res['cardHtml'] = $cardHtml; // card html
        $res['products'] = $productList;
        $res['productsHtmlWrap'] = '<h4>Choose Your Model';
        $res['barndname'] = $barndname;
        $res['category_name'] = $category_name;
        $res['category_id'] = $category_id;
        return response()->json($res);

        // if ($productList) {
        //     return response()->json($productList, 200);
        // } else {
        //     return response()->json('Not found', 404);
        // }
    }


    public function getBrand(Request $request)
    {
        $catId = $request->catid;
        $filter = $request->filter;
        $tableDescription = (new ShopProductDescription)->getTable();
        $tableProduct = (new ShopProduct)->getTable();
        // dd($tableProduct);
        $tableCategory = (new ShopProductCategory)->getTable();
        $obj = (new ShopProduct)
            ->leftJoin($tableDescription, $tableDescription . '.product_id', $tableProduct . '.id')
            ->where($tableDescription . '.lang', sc_get_locale());

        if (isset($filter) && $filter != "") {
            $obj->where($tableDescription . '.name', 'like', '%' . $filter . '%');
            $obj->orWhere($tableProduct . '.comment', 'like', '%' . $filter . '%');
        }
        $obj = $obj->leftJoin($tableCategory, $tableCategory . '.product_id', $tableProduct . '.id');
        if (isset($catId)) {
            $obj->where($tableCategory . '.category_id', $catId);
        }

        $productList = $obj->sort('sort', 'asc')->sort('id', 'desc')->paginate(20);

        $productList = ShopBrand::paginate(18);


        // $siteURl = "https://prc.repair/prc/";
        $siteURl = url('/');
        $res = array();
        $res['succ'] = 1;
        $res['pagination'] = "";
        $res['cardHtml']  = "";
        // make loop of html
        $cardHtml = "";
        if ($productList->count()) {
            ob_start();
            foreach ($productList as $eachProduct) {
                ?>
                <!-- <div class="repair-item mk-repair-item-no-border mk-repair-item-no-margin col-xl-4 col-lg-4 col-md-4 col-sm-6 col-6">
                <div class="mk-repair-item-wrap">
                    <div class="image-item">
                        <a href="<?php echo $siteURl; ?>category/<?php echo $eachProduct->id; ?>"><img src="<?php echo $eachProduct->image; ?>" alt="<?php echo $eachProduct->name ?>"></a>
                    </div>
                    <h3><a href="<?php echo $siteURl; ?>category/<?php echo $eachProduct->id; ?>"><?php echo $eachProduct->name ?></a></h3>
                </div>
            </div> -->

                <div class="repair-item mk-repair-item-no-border mk-repair-item-no-margin col-xl-4 col-lg-4 col-md-4 col-sm-6 col-6">
                    <div class="mk-repair-item-wrap">
                        <div class="image-item">
                            <a href="#"><img src="<?php echo $eachProduct->image; ?>" onclick="GetCategory('<?php echo $eachProduct->id ?>')" alt="<?php echo $eachProduct->name ?>"></a>
                        </div>
                        <h3><a href="#"  onclick="GetCategory('<?php echo $eachProduct->id ?>')" ><?php echo $eachProduct->name ?></a></h3>
                    </div>
                </div>
                <?php
            }
            $cardHtml .= ob_get_clean();

            // echo run pagination
            ob_start();
            echo $productList->links();
            $res['pagination'] = ob_get_clean();
            // end pagination
        } else {
            $res['succ'] = false;
        }

        $res['cardHtml'] = $cardHtml; // card html
        $res['products'] = $productList;

        $res['productsHtmlWrap'] = '<h4>Choose Your Brand</h4>';
        // dd($res);
        return response()->json($res);

        // if ($productList) {
        //     return response()->json($productList, 200);
        // } else {
        //     return response()->json('Not found', 404);
        // }
    }

    public function getCategory($brand_id)
    {
        $productList = ShopCategory::where('brand_id',$brand_id)->paginate(20);
        $barndname = ShopBrand::where('id',$brand_id)->first(); 
        // $siteURl = "https://prc.repair/prc/";
        $siteURl = url('/prc/');
        $res = array();
        $res['succ'] = 1;
        $res['pagination'] = "";
        $res['cardHtml']  = "";
        // make loop of html
        $cardHtml = "";
        // dd($productList);
        if ($productList->count()) {
            ob_start();
            foreach ($productList as $eachProduct) {
                ?>
                <!-- <div class="repair-item mk-repair-item-no-border mk-repair-item-no-margin col-xl-4 col-lg-4 col-md-4 col-sm-6 col-6">
                <div class="mk-repair-item-wrap">
                    <div class="image-item">
                        <a href="<?php echo $siteURl; ?>category/<?php echo $eachProduct->id; ?>"><img src="<?php echo $eachProduct->image; ?>" alt="<?php echo $eachProduct->name ?>"></a>
                    </div>
                    <h3><a href="<?php echo $siteURl; ?>category/<?php echo $eachProduct->id; ?>"><?php echo $eachProduct->name ?></a></h3>
                </div>
            </div> -->

                <div class="repair-item mk-repair-item-no-border mk-repair-item-no-margin col-xl-4 col-lg-4 col-md-4 col-sm-6 col-6">
                    <div class="mk-repair-item-wrap">
                        <div class="image-item">
                            <a href="#"><img src="<?php echo $eachProduct->image; ?>" onclick="showProductsList('<?php echo $eachProduct->brand_id ?>','<?php echo $eachProduct->id ?>')" alt="<?php echo $eachProduct->alias ?>"></a>
                        </div>
                        <h3><a href="#"  onclick="showProductsList('<?php echo $eachProduct->brand_id ?>','<?php echo $eachProduct->id ?>')" ><?php echo $eachProduct->alias ?></a></h3>
                    </div>
                </div>
                <?php
            }
            $cardHtml .= ob_get_clean();

            // echo run pagination
            ob_start();
            echo $productList->links();
            $res['pagination'] = ob_get_clean();
            // end pagination
        } else {
            $res['succ'] = false;
        }

        $res['cardHtml'] = $cardHtml; // card html
        $res['products'] = $productList;
        $res['barndname'] = $barndname->name; 
        $res['productsHtmlWrap'] = '<h4>Choose Your Category</h4>';
        return response()->json($res);
    }

}


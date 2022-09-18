<?php

namespace App\WebwilaHelpers;

use App\Models\ShopBrand;

class Bz
{
    
    /**
     * showbrand
     * Main products listing page 
     */
    public static  function showbrand($formData = array())
    {
        $itemsList = (new ShopBrand())->getData();
        return view('templates.prc.mainpage.product.brand',['itemsList' => $itemsList,'repair'=>1]);
    }
}

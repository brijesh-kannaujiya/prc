<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductIndexRequest;
use Vanilo\Category\Contracts\Taxon;
use Vanilo\Category\Models\TaxonomyProxy;
use Vanilo\Framework\Search\ProductFinder;
use Vanilo\Product\Contracts\Product;
use Vanilo\Properties\Models\PropertyProxy;

class ServiceMenuController extends Controller
{
    /** @var ProductFinder */
    public function showMailinrepair()
    {
        return view('templates.prc.service.mailinrepair');
    }

    public function showMacbookrepair()
    {
        return view('templates.prc.service.macbookrepair');
    }

    public function showLaptoprepair()
    {
        return view('templates.prc.service.laptoprepair');
    }

    public function showDatarepair()
    {
        return view('templates.prc.service.datarepair');
    }

    public function showMotherboardrepair()
    {
        return view('templates.prc.service.motherboardrepair');
    }

    public function showLiquidrepair()
    {
        return view('templates.prc.service.liquidrepair');
    }

    public function showGamingconsole()
    {
        return view('templates.prc.service.gamingconsole');
    }

    public function showServiceinsurance()
    {
        return view('templates.prc.service.serviceinsurance');
    }

    public function showMobileaccessories()
    {
        return view('templates.prc.service.mobileaccessories');
    }

    public function showSellbrokenphone()
    {
        return view('templates.prc.service.sellbrokenphone');
    }

    public function showPhoneunlock()
    {
        return view('templates.prc.service.phoneunlock');
    }
}

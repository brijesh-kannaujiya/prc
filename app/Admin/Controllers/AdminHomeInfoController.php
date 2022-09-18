<?php
#app/Http/Admin/Controllers/AdminHomeInfoController.php
namespace App\Admin\Controllers;

use App\Http\Controllers\Controller;
use App\Models\AdminHome;
use App\Models\AdminStore;
use App\Models\AdminStoreDescription;
use App\Models\ShopLanguage;
use Illuminate\Http\Request;

class AdminHomeInfoController extends Controller
{

    public function index()
    {
        $languages = ShopLanguage::getCodeActive();
        $data = [
            'title' => trans('store_info.admin.list'),
            'subTitle' => '',
            'icon' => 'fa fa-indent',        ];



        $infos = AdminHome::getData();
        $data['infos'] = $infos;

        return view('admin.screen.home_info')
            ->with($data);
    }

/*
Update value config
 */
    public function updateInfo()
    {

        $data = request()->all();
        $name = $data['name'];
        $value = $data['value'];
            try {
                AdminHome::first()->update([$name => $value]);
                $error = 0;
            } catch (\Exception $e) {
                dd($e);
                $error = 1;
            }
        return response()->json(['error' => $error]);

    }

}

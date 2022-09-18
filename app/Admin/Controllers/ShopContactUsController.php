<?php
#app/Http/Admin/Controllers/ShopContactUsController.php
namespace App\Admin\Controllers;

use App\Http\Controllers\Controller;
use App\Models\ShopContactUs;
use App\Models\ShopFaq;
use App\Models\ShopLink;
use App\Models\ShopLinkContent;
use Illuminate\Http\Request;
use Validator;

class ShopContactUsController extends Controller
{


    public function __construct()
    {

    }
    public function index()
    {
        $data = [
            'title' => trans('prccontact.admin.list'),
            'subTitle' => '',
            'icon' => 'fa fa-indent',
            'urlDeleteItem' => route('contact.delete'),
            'removeList' => 0, // 1 - Enable function delete list item
            'buttonRefresh' => 1, // 1 - Enable button refresh
            'buttonSort' => 0, // 1 - Enable button sort
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
            'first_name' => trans('prccontact.first_name'),
            'last_name' => trans('prccontact.last_name'),
            'mail_id' => trans('prccontact.mail_id'),
            'mobile_no' => trans('prccontact.mobile_no'),
            'msg' => trans('prccontact.admin.msg'),
            'action' => trans('prccontact.admin.action'),
        ];

        $objOrder = new ShopContactUs();
        $objOrder = $objOrder->orderBy('id', 'desc');
        $dataTmp = $objOrder->paginate(20);

        $dataTr = [];
        foreach ($dataTmp as $key => $row) {
            $dataTr[] = [
                'first_name' => $row['first_name'],
                'last_name' => $row['last_name'],
                'mail_id' => $row['mail_id'],
                'mobile_no' => $row['mobile_no'],
                'msg' => $row['msg'],
                'action' => ' <span onclick="deleteItem(' . $row['id'] . ');"  title="' . trans('admin.delete') . '" class="btn btn-flat btn-danger"><i class="fa fa-trash"></i></span>',
            ];
        }

        $data['listTh'] = $listTh;
        $data['dataTr'] = $dataTr;
        $data['pagination'] = $dataTmp->appends(request()->except(['_token', '_pjax']))->links('admin.component.pagination');
        $data['resultItems'] = trans('langfaq.admin.result_item', ['item_from' => $dataTmp->firstItem(), 'item_to' => $dataTmp->lastItem(), 'item_total' => $dataTmp->total()]);

//menuRight
       /* $data['menuRight'][] = '<a href="' . route('faq.create') . '" class="btn  btn-success  btn-flat" title="New" id="button_create_new">
                           <i class="fa fa-plus" title="' . trans('langfaq.admin.add_new') . '"></i>
                           </a>';*/
//=menuRight
        return view('admin.screen.list')
            ->with($data);
    }

/*
Delete list item
Need mothod destroy to boot deleting in model
 */
    public function deleteList()
    {
        if (!request()->ajax()) {
            return response()->json(['error' => 1, 'msg' => 'Method not allow!']);
        } else {
            $ids = request('ids');
            $arrID = explode(',', $ids);
            ShopContactUs::destroy($arrID);
            return response()->json(['error' => 0, 'msg' => '']);
        }
    }

}

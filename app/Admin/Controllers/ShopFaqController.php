<?php
#app/Http/Admin/Controllers/ShopFaqController.php
namespace App\Admin\Controllers;

use App\Http\Controllers\Controller;
use App\Models\ShopFaq;
use App\Models\ShopLink;
use App\Models\ShopLinkContent;
use Illuminate\Http\Request;
use Validator;

class ShopFaqController extends Controller
{


    public function __construct()
    {

    }
    public function index()
    {
        $data = [
            'title' => trans('langfaq.admin.list'),
            'subTitle' => '',
            'icon' => 'fa fa-indent',
            'urlDeleteItem' => route('faq.delete'),
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
            'question' => trans('langfaq.question'),
            'answer' => trans('langfaq.answer'),
            'status' => trans('langfaq.status'),
            'show_home' => trans('langfaq.show_home'),
            'action' => trans('langfaq.admin.action'),
        ];

        $objOrder = new ShopFaq();
        $objOrder = $objOrder->orderBy('id', 'desc');
        $dataTmp = $objOrder->paginate(20);

        $dataTr = [];
        foreach ($dataTmp as $key => $row) {
            $dataTr[] = [
                'question' => $row['question'],
                'answer' => $row['answer'],
                'status' => $row['status'] ? '<span class="label label-success">ON</span>' : '<span class="label label-danger">OFF</span>',
                'show_home' => $row['show_home'] ? '<span class="label label-success">ON</span>' : '<span class="label label-danger">OFF</span>',
                'action' => '
                    <a href="' . route('faq.edit', ['id' => $row['id']]) . '"><span title="' . trans('link.admin.edit') . '" type="button" class="btn btn-flat btn-primary"><i class="fa fa-edit"></i></span></a>&nbsp;

                  ',
            ];
        }

        $data['listTh'] = $listTh;
        $data['dataTr'] = $dataTr;
        $data['pagination'] = $dataTmp->appends(request()->except(['_token', '_pjax']))->links('admin.component.pagination');
        $data['resultItems'] = trans('langfaq.admin.result_item', ['item_from' => $dataTmp->firstItem(), 'item_to' => $dataTmp->lastItem(), 'item_total' => $dataTmp->total()]);

//menuRight
        $data['menuRight'][] = '<a href="' . route('faq.create') . '" class="btn  btn-success  btn-flat" title="New" id="button_create_new">
                           <i class="fa fa-plus" title="' . trans('langfaq.admin.add_new') . '"></i>
                           </a>';
//=menuRight
        return view('admin.screen.list')
            ->with($data);
    }

/**
 * Form create new order in admin
 * @return [type] [description]
 */
    public function create()
    {
        $data = [
            'title' => trans('langfaq.admin.add_new_title'),
            'subTitle' => '',
            'title_description' => trans('langfaq.admin.add_new_des'),
            'icon' => 'fa fa-plus',
            'faq' => [],
            'readonly'=>'',
            'url_action' => route('faq.create'),
        ];
        return view('admin.screen.faq')
            ->with($data);
    }

/**
 * Post create new order in admin
 * @return [type] [description]
 */
    public function postCreate()
    {
        $data = request()->all();
        $dataOrigin = request()->all();
        $validator = Validator::make($dataOrigin, [
            'question' => 'required',
            'answer' => 'required',
        ]);

        if ($validator->fails()) {
            // dd($validator->messages());
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }
        $dataInsert = [
            'question' => $data['question'],
            'answer' => $data['answer'],
            'status' => empty($data['status']) ? 0 : 1,
            'show_home' => empty($data['show_home']) ? 0 : 1,
        ];
        ShopFaq::create($dataInsert);
        return redirect()->route('faq.index')->with('success', trans('langfaq.admin.create_success'));

    }

/**
 * Form edit
 */
    public function edit($id)
    {
        $faq = ShopFaq::find($id);
        if ($faq === null) {
            return 'no data';
        }
        $data = [
            'title' => trans('linkcontent.admin.edit'),
            'subTitle' => '',
            'title_description' => '',
            'icon' => 'fa fa-pencil-square-o',
            'faq' => $faq,
            'readonly'=>'readonly',
            'url_action' => route('faq.edit', ['id' => $faq['id']]),
        ];
        return view('admin.screen.faq')
            ->with($data);
    }

/**
 * update status
 */
    public function postEdit($id)
    {
        $data = request()->all();
        $dataOrigin = request()->all();
        $validator = Validator::make($dataOrigin, [
            'question' => 'required',
            'answer' => 'required',
        ]);

        if ($validator->fails()) {
            // dd($validator->messages());
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }
//Edit
        $dataUpdate = [
            'question' => $data['question'],
            'answer' => $data['answer'],
            'status' => empty($data['status']) ? 0 : 1,
            'show_home' => empty($data['show_home']) ? 0 : 1,
        ];
        $obj = ShopFaq::find($id);
        $obj->update($dataUpdate);
//
        return redirect()->route('faq.index')->with('success', trans('langfaq.admin.edit_success'));

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
            ShopFaq::destroy($arrID);
            return response()->json(['error' => 0, 'msg' => '']);
        }
    }

}

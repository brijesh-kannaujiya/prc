<?php
#app/Http/Admin/Controllers/ShopLinkContentController.php
namespace App\Admin\Controllers;

use App\Http\Controllers\Controller;
use App\Models\ShopLink;
use App\Models\ShopLinkContent;
use Illuminate\Http\Request;
use Validator;

class ShopLinkContentController extends Controller
{

    protected $arrTarget;
    protected $arrGroup;

    public function __construct()
    {
        $this->arrTarget = ['_blank' => '_blank', '_self' => '_self'];
        $this->arrGroup = ['menu' => 'Menu', 'footer' => 'Footer'];
    }
    public function index()
    {
        $data = [
            'title' => trans('linkcontent.admin.list'),
            'subTitle' => '',
            'icon' => 'fa fa-indent',
            'urlDeleteItem' => route('admin_link_content.delete'),
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
            'page' => trans('linkcontent.page'),
            'keyword' => trans('linkcontent.keyword'),
            'status' => trans('linkcontent.status'),
            'action' => trans('linkcontent.admin.action'),
        ];

        $objOrder = new ShopLinkContent();
        $objOrder = $objOrder->orderBy('id', 'desc');
        $dataTmp = $objOrder->paginate(20);

        $dataTr = [];
        foreach ($dataTmp as $key => $row) {
            $dataTr[] = [
                'page_name' => $row['page_name'],
                'keyword' => $row['keyword'],
                'status' => $row['status'] ? '<span class="label label-success">ON</span>' : '<span class="label label-danger">OFF</span>',
                'action' => '
                    <a href="' . route('admin_link_content.edit', ['id' => $row['id']]) . '"><span title="' . trans('link.admin.edit') . '" type="button" class="btn btn-flat btn-primary"><i class="fa fa-edit"></i></span></a>&nbsp;

                  ',
            ];
        }

        $data['listTh'] = $listTh;
        $data['dataTr'] = $dataTr;
        $data['pagination'] = $dataTmp->appends(request()->except(['_token', '_pjax']))->links('admin.component.pagination');
        $data['resultItems'] = trans('link.admin.result_item', ['item_from' => $dataTmp->firstItem(), 'item_to' => $dataTmp->lastItem(), 'item_total' => $dataTmp->total()]);

//menuRight
        $data['menuRight'][] = '<a href="' . route('admin_link_content.create') . '" class="btn  btn-success  btn-flat" title="New" id="button_create_new">
                           <i class="fa fa-plus" title="' . trans('linkcontent.admin.add_new') . '"></i>
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
            'title' => trans('linkcontent.admin.add_new_title'),
            'subTitle' => '',
            'title_description' => trans('linkcontent.admin.add_new_des'),
            'icon' => 'fa fa-plus',
            'linkcontent' => [],
            'arrTarget' => $this->arrTarget,
            'arrGroup' => $this->arrGroup,
            'readonly'=>'',
            'url_action' => route('admin_link_content.create'),
        ];
        return view('admin.screen.linkcontent')
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
            'page_name' => 'required',
            'keyword' => 'required|string|max:100|unique:"'.ShopLinkContent::class.'"',
            'content' => 'required',
        ]);

        if ($validator->fails()) {
            // dd($validator->messages());
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }
        $dataInsert = [
            'page_name' => $data['page_name'],
            'keyword' => $data['keyword'],
            'content' => $data['content'],
            'status' => empty($data['status']) ? 0 : 1,
        ];
        ShopLinkContent::create($dataInsert);
        return redirect()->route('admin_link_content.index')->with('success', trans('linkcontent.admin.create_success'));

    }

/**
 * Form edit
 */
    public function edit($id)
    {
        $linkcontent = ShopLinkContent::find($id);
        if ($linkcontent === null) {
            return 'no data';
        }
        $data = [
            'title' => trans('linkcontent.admin.edit'),
            'subTitle' => '',
            'title_description' => '',
            'icon' => 'fa fa-pencil-square-o',
            'linkcontent' => $linkcontent,
            'readonly'=>'readonly',
            'url_action' => route('admin_link_content.edit', ['id' => $linkcontent['id']]),
        ];
        return view('admin.screen.linkcontent')
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
            'page_name' => 'required',
            'keyword' => 'required|string|max:100',
            'content' => 'required',
        ]);

        if ($validator->fails()) {
            // dd($validator->messages());
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }
//Edit
        $dataUpdate = [
            'page_name' => $data['page_name'],
            'keyword' => $data['keyword'],
            'content' => $data['content'],
            'status' => empty($data['status']) ? 0 : 1,
        ];
        $obj = ShopLinkContent::find($id);
        $obj->update($dataUpdate);
//
        return redirect()->route('admin_link_content.index')->with('success', trans('linkcontent.admin.edit_success'));

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
            ShopLinkContent::destroy($arrID);
            return response()->json(['error' => 0, 'msg' => '']);
        }
    }

}

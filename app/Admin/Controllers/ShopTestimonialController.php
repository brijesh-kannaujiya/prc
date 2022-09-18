<?php
#app/Http/Admin/Controllers/ShopTestimonialController.php
namespace App\Admin\Controllers;

use App\Http\Controllers\Controller;
use App\Models\ShopFaq;
use App\Models\ShopLink;
use App\Models\ShopLinkContent;
use App\Models\ShopTestimonial;
use Illuminate\Http\Request;
use Validator;

class ShopTestimonialController extends Controller
{


    public function __construct()
    {

    }
    public function index()
    {
        $data = [
            'title' => trans('prctestimonial.admin.list'),
            'subTitle' => '',
            'icon' => 'fa fa-indent',
            'urlDeleteItem' => route('testimonial.delete'),
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
            'content' => trans('prctestimonial.content'),
            'status' => trans('prctestimonial.status'),
            'action' => trans('prctestimonial.admin.action'),
        ];

        $objOrder = new ShopTestimonial();
        $objOrder = $objOrder->orderBy('id', 'desc');
        $dataTmp = $objOrder->paginate(20);

        $dataTr = [];
        foreach ($dataTmp as $key => $row) {
            $dataTr[] = [
                'content' => $row['content'],
                'status' => $row['status'] ? '<span class="label label-success">ON</span>' : '<span class="label label-danger">OFF</span>',
                'action' => '
                    <a href="' . route('testimonial.edit', ['id' => $row['id']]) . '"><span title="' . trans('prctestimonial.admin.edit') . '" type="button" class="btn btn-flat btn-primary"><i class="fa fa-edit"></i></span></a>&nbsp;
                    <a href="' . route('testimonial.copy', ['id' => $row['id']]) . '"><span title="' . trans('prctestimonial.admin.copy') . '" type="button" class="btn btn-flat btn-info"><i class="fa fa-copy"></i></span></a>

                  ',
            ];
        }

        $data['listTh'] = $listTh;
        $data['dataTr'] = $dataTr;
        $data['pagination'] = $dataTmp->appends(request()->except(['_token', '_pjax']))->links('admin.component.pagination');
        $data['resultItems'] = trans('prctestimonial.admin.result_item', ['item_from' => $dataTmp->firstItem(), 'item_to' => $dataTmp->lastItem(), 'item_total' => $dataTmp->total()]);

//menuRight
        $data['menuRight'][] = '<a href="' . route('testimonial.create') . '" class="btn  btn-success  btn-flat" title="New" id="button_create_new">
                           <i class="fa fa-plus" title="' . trans('prctestimonial.admin.add_new') . '"></i>
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
            'title' => trans('prctestimonial.admin.add_new_title'),
            'subTitle' => '',
            'title_description' => trans('prctestimonial.admin.add_new_des'),
            'icon' => 'fa fa-plus',
            'testimonial' => [],
            'readonly'=>'',
            'url_action' => route('testimonial.create'),
        ];
        return view('admin.screen.testimonial')
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
            'content' => 'required',
        ]);

        if ($validator->fails()) {
            // dd($validator->messages());
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }
        $dataInsert = [
            'content' => $data['content'],
            'status' => empty($data['status']) ? 0 : 1,
        ];
        ShopTestimonial::create($dataInsert);
        return redirect()->route('testimonial.index')->with('success', trans('prctestimonial.admin.create_success'));

    }

/**
 * Form edit
 */
    public function edit($id)
    {
        $testimonial = ShopTestimonial::find($id);
        if ($testimonial === null) {
            return 'no data';
        }
        $data = [
            'title' => trans('prctestimonial.admin.edit'),
            'subTitle' => '',
            'title_description' => '',
            'icon' => 'fa fa-pencil-square-o',
            'testimonial' => $testimonial,
            'readonly'=>'readonly',
            'url_action' => route('testimonial.edit', ['id' => $testimonial['id']]),
        ];
        return view('admin.screen.testimonial')
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
            'content' => $data['content'],
            'status' => empty($data['status']) ? 0 : 1,
        ];
        $obj = ShopTestimonial::find($id);
        $obj->update($dataUpdate);
//
        return redirect()->route('testimonial.index')->with('success', trans('prctestimonial.admin.edit_success'));

    }

    /**
     * Form copy
     */
    public function copy($id)
    {
        $testimonial = ShopTestimonial::find($id);
        if ($testimonial === null) {
            return 'no data';
        }
        $data = [
            'title' => trans('repair.admin.edit'),
            'subTitle' => '',
            'title_description' => '',
            'icon' => 'fa fa-pencil-square-o',
            'testimonial' => $testimonial,
            'url_action' => route('testimonial.create'),
        ];
        return view('admin.screen.testimonial')
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
            ShopTestimonial::destroy($arrID);
            return response()->json(['error' => 0, 'msg' => '']);
        }
    }

}

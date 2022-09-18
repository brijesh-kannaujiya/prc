<?php
namespace App\Admin\Controllers;

use App\Admin\Models\AdminUser;
use App\Http\Controllers\Controller;
use App\Models\ShopCategory;
use App\Models\ShopEmailTemplate;
use App\Models\ShopLanguage;
use App\Models\ShopProduct;
use App\Models\ShopTask;
use App\Models\ShopTaskTypeDetails;
use Illuminate\Http\Request;
use App\Mail\SendMail;
use Illuminate\Support\Facades\Mail;
use Validator;

class ShopTaskController extends Controller
{
    public $languages;

    protected $arrType;
    public $templatePath;

    public function __construct()
    {
        $this->languages = ShopLanguage::getList();
        $this->arrType = ['product' => 'Product', 'category' => 'Category'];
        $this->templatePath = 'templates.' . sc_store('template');

    }

    public function index()
    {
        $data = [
            'title' => trans('task.admin.list'),
            'subTitle' => '',
            'icon' => 'fa fa-indent',
            'urlDeleteItem' => route('admin_task.delete'),
            'removeList' => 1, // 1 - Enable function delete list item
            'buttonRefresh' => 1, // 1 - Enable button refresh
            'buttonSort' => 1, // 1 - Enable button sort
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
            'id' => trans('task.id'),
            'user' => trans('task.user'),
            'title' => trans('task.title'),
            'description' => trans('task.description'),
            'status' => trans('task.status'),
            'action' => trans('task.admin.action'),
        ];
        $sort_order = request('sort_order') ?? 'id_desc';
        $keyword = request('keyword') ?? '';
        $arrSort = [
            'id__desc' => trans('task.admin.sort_order.id_desc'),
            'id__asc' => trans('task.admin.sort_order.id_asc'),
            'title__desc' => trans('task.admin.sort_order.title_desc'),
            'title__asc' => trans('task.admin.sort_order.title_asc'),
        ];
        $obj = new ShopTask;

        $obj = $obj
            ->leftJoin(SC_DB_PREFIX.'admin_user', SC_DB_PREFIX.'admin_tasks.user_id',SC_DB_PREFIX.'admin_user.id' )
            ->select( SC_DB_PREFIX.'admin_tasks.*',SC_DB_PREFIX.'admin_user.name',SC_DB_PREFIX.'admin_user.username');

        if ($sort_order && array_key_exists($sort_order, $arrSort)) {
            $field = explode('__', $sort_order)[0];
            $sort_field = explode('__', $sort_order)[1];
            $obj = $obj->orderBy($field, $sort_field);

        } else {
            $obj = $obj->orderBy(SC_DB_PREFIX.'admin_tasks.id', 'desc');
        }
        $dataTmp = $obj->paginate(20);

        $dataTr = [];
        foreach ($dataTmp as $key => $row) {
            $dataTr[] = [
                'id' => $row['id'],
                'user' => $row['name'],
                'title' => $row['title'],
                'description' => $row['description'],
                'is_complete' => $row['is_complete'] ? '<span class="label label-success">COMPLETED</span>' : '<span class="label label-danger">PENDING</span>',
                'action' => '
                    <a href="' . route('admin_task.edit', ['id' => $row['id']]) . '"><span title="' . trans('task.admin.edit') . '" type="button" class="btn btn-flat btn-primary"><i class="fa fa-edit"></i></span></a>&nbsp;

                    <span onclick="deleteItem(' . $row['id'] . ');"  title="' . trans('admin.delete') . '" class="btn btn-flat btn-success"><i class="fa fa-check"></i></span>'
                ,
            ];
        }

        $data['listTh'] = $listTh;
        $data['dataTr'] = $dataTr;
        $data['pagination'] = $dataTmp->appends(request()->except(['_token', '_pjax']))->links('admin.component.pagination');
        $data['resultItems'] = trans('task.admin.result_item', ['item_from' => $dataTmp->firstItem(), 'item_to' => $dataTmp->lastItem(), 'item_total' => $dataTmp->total()]);


//menuRight
        $data['menuRight'][] = '<a href="' . route('admin_task.create') . '" class="btn  btn-success  btn-flat" title="New" id="button_create_new">
        <i class="fa fa-plus" title="'.trans('admin.add_new').'"></i>
        </a>';
//=menuRight

//menuSort        
        $optionSort = '';
        foreach ($arrSort as $key => $status) {
            $optionSort .= '<option  ' . (($sort_order == $key) ? "selected" : "") . ' value="' . $key . '">' . $status . '</option>';
        }

        $data['urlSort'] = route('admin_task.index');
        $data['optionSort'] = $optionSort;
//=menuSort

//menuSearch        
        $data['topMenuRight'][] = '
                <form action="' . route('admin_task.index') . '" id="button_search">
                   <div onclick="$(this).submit();" class="btn-group pull-right">
                           <a class="btn btn-flat btn-primary" title="Refresh">
                              <i class="fa  fa-search"></i>
                           </a>
                   </div>
                   <div class="btn-group pull-right">
                         <div class="form-group">
                           <input type="text" name="keyword" class="form-control" placeholder="' . trans('task.admin.search_place') . '" value="' . $keyword . '">
                         </div>
                   </div>
                </form>';
//=menuSearch

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
            'title' => trans('task.admin.add_new_title'),
            'subTitle' => '',
            'title_description' => trans('task.admin.add_new_des'),
            'icon' => 'fa fa-plus',
            'languages' => $this->languages,
            'users' => [],
            'users' => (new AdminUser())->orderBy('id', 'desc')->get(),
            'type' => $this->arrType,
            'urlGetProduct' => route('admin_task.getProduct'),
            'urlGetCatgory' => route('admin_task.getCatgory'),
            'url_action' => route('admin_task.create'),

        ];

        return view('admin.screen.task')
            ->with($data);
    }

/**
 * Post create new order in admin
 * @return [type] [description]
 */
    public function postCreate()
    {

        $data = request()->all();
        $langFirst = array_key_first(sc_language_all()->toArray());
        //get first code language active
        $validator = Validator::make($data, [
            'title' => 'required|string|max:200',
            'description' => 'nullable|string|max:300',
            'user_id'   => 'required'
        ]);
        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput($data);
        }

            $dataDes = [
                'is_complete' => !empty($data['is_complete']) ? 1 : 0,
                'user_id' => (int) $data['user_id'],
                'title' => $data['title'],
                'description' => $data['description'],
            ];
        $id = ShopTask::insertGetId($dataDes);
        $dataType= [];
        $dataType = [
            'task_id' => $id,
            'task_type' => $data['task_type'],
            'product_cat_id' => (int) $data['product_cat_id'],
        ];

        $userData = (new AdminUser())->where('id',$data['user_id'])->get();
        foreach ($userData as $user => $key){
        $checkContent = (new ShopEmailTemplate)->where('group', 'other')->where('status', 1)->first();
        $dataFind = [
            '/\{\{\$title\}\}/',
            '/\{\{\$username\}\}/',
            '/\{\{\$tasktitle\}\}/',
            '/\{\{\$taskdescription\}\}/',
            '/\{\{\$url\}\}/',
        ];
        $dataReplace = [
            trans('order.send_mail.task_title'),
            $key['name'],
            $data['title'],
            $data['description'],
            env('APP_URL', 'http://localhost:8000').'/prc_admin/'.$data['task_type'].'/edit/'.$data['product_cat_id'],
        ];

        $content = $checkContent->text;

        $content = preg_replace($dataFind, $dataReplace, $content);

        $dataView = [
            'content' => $content,
        ];
        $config = [
            'to' => $key['email'],
            'subject' => 'NEW TASK ASSIGN',
        ];

            try {

                Mail::send(new SendMail('templates.mail.order_success_to_admin', $dataView, $config, []));
            } catch (\Throwable $e) {
                dd($e);
                sc_report("Sendmail view:" . PHP_EOL . $e->getMessage());
            }


        /*sc_send_mail($this->templatePath . '.mail.order_success_to_admin', $dataView, $config, []);*/
    }
        ShopTaskTypeDetails::insert($dataType);
        return redirect()->route('admin_task.index')->with('success', trans('task.admin.create_success'));
    }

/**
 * Form edit
 */
    public function edit($id)
    {
        $task = ShopTask::find($id);
        if ($task === null) {
            return 'no data';
        }
        $data = [
            'title' => trans('task.admin.edit'),
            'subTitle' => '',
            'title_description' => '',
            'icon' => 'fa fa-pencil-square-o',
            'languages' => $this->languages,
            'task' => $task,
            'users' => (new AdminUser())->orderBy('id', 'desc')->get(),
            'type' => $this->arrType,
            'urlGetProduct' => route('admin_task.getProduct'),
            'urlGetCatgory' => route('admin_task.getCatgory'),
            'url_action' => route('admin_task.edit', ['id' => $task['id']]),
        ];
        return view('admin.screen.task')
            ->with($data);
    }

/**
 * update status
 */
    public function postEdit($id)
    {
        $task = ShopTask::find($id);
        $data = request()->all();

        $validator = Validator::make($data, [
            'title' => 'required|string|max:200',
            'description' => 'nullable|string|max:300',
            'user_id'   => 'required'
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput($data);
        }
//Edit
        $task->description = $data['description'];
        $task->user_id = $data['user_id'];
        $task->title = $data['title'];
        $task->is_complete = !empty($data['is_complete']) ? 1 : 0;


        $userData = (new AdminUser())->where('id',$data['user_id'])->get();
        foreach ($userData as $user => $key) {
            $checkContent = (new ShopEmailTemplate)->where('group', 'other')->where('status', 1)->first();
            $dataFind = [
                '/\{\{\$title\}\}/',
                '/\{\{\$username\}\}/',
                '/\{\{\$tasktitle\}\}/',
                '/\{\{\$taskdescription\}\}/',
                '/\{\{\$url\}\}/',
            ];
            $dataReplace = [
                trans('order.send_mail.update_task_title'),
                $key['name'],
                $data['title'],
                $data['description'],
                env('APP_URL', 'http://localhost:8000') . '/prc_admin/' . $data['task_type'] . '/edit/' . $data['product_cat_id'],
            ];

            $content = $checkContent->text;

            $content = preg_replace($dataFind, $dataReplace, $content);

            $dataView = [
                'content' => $content,
            ];
            $config = [
                'to' => $key['email'],
                'subject' => 'NEW TASK ASSIGN',
            ];

            try {

                Mail::send(new SendMail('templates.mail.order_success_to_admin', $dataView, $config, []));
            } catch (\Throwable $e) {
                sc_report("Sendmail view:" . PHP_EOL . $e->getMessage());
            }

        }

            $task->update();
        return redirect()->route('admin_task.index')->with('success', trans('task.admin.edit_success'));

    }

/*
Delete list Item
Need mothod destroy to boot deleting in model
 */
    public function deleteList()
    {
        if (!request()->ajax()) {
            return response()->json(['error' => 1, 'msg' => 'Method not allow!']);
        } else {
            $ids = request('ids');
            $arrID = explode(',', $ids);
            foreach ($arrID as $ids => $id){
                $task = ShopTask::find($id);
                $dataUpdate = [
                    'id'=> (int) $task['id'],
                    'is_complete' => 1,
                    'user_id' => (int) $task['user_id'],
                    'title' => $task['title'],
                    'description' => $task['description'],
                ];
                $task->update($dataUpdate);
            }
            return response()->json(['error' => 0, 'msg' => 'Task Completed']);
        }
    }

    public function  getProduct(){
        return ShopProduct::getArrayProductName();
    }


    public function getCatgory()
    {
        return  ShopCategory::getArrayCategoryName();
    }

}

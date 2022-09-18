<?php
#app/Models/ShopRepair.php
namespace App\Models;

use Cache;
use Illuminate\Database\Eloquent\Model;
use App\Models\ModelTrait;
use Laravel\Scout\Searchable;

class ShopRepair extends Model
{
    use ModelTrait,Searchable;

    public $timestamps = false;
    public $table = SC_DB_PREFIX . 'shop_repair';
    protected $guarded = [];
    protected $connection = SC_CONNECTION;
    const SEARCHABLE_FIELDS = ['id','title', 'alias'];

    public function toSearchableArray()
    {

        return $this->only(self::SEARCHABLE_FIELDS);
    }


    public function repairs(){
        return $this->belongsToMany(ShopProduct::class,ShopRepairProduct::class,'repair_id','product_id');
    }

 /*public function repairprice(){
        return $this->belongsTo(ShopProductRepairPrice::class,'repair_id','id');
    }*/

    public function repairProduct()
    {
        return $this->hasMany(ShopRepairProduct::class, 'repair_id', 'id');
    }

    public function getRepair($key){

        return ShopRepair::getOne($key,1);
    }



    protected static function boot()
    {
        parent::boot();
        // before delete() method call this
        static::deleting(function ($repair) {
            //Delete category descrition
            $repair->repairProduct()->delete();
        });
    }





    /*
    *Get thumb
    */
    public function getThumb()
    {
        return sc_image_get_path_thumb($this->image);
    }

    /*
    *Get image
    */
    public function getImage()
    {
        return sc_image_get_path($this->image);
    }

    public function getUrl()
    {
        return route('repair.detail', ['alias' => $this->alias]);
    }



    /**
     * Get list category
     *
     * @param   array  $arrOpt
     * Example: ['status' => 1, 'top' => 1]
     * @param   array  $arrSort
     * Example: ['sortBy' => 'id', 'sortOrder' => 'asc']
     * @param   array  $arrLimit  [$arrLimit description]
     * Example: ['step' => 0, 'limit' => 20]
     * @return  [type]             [return description]
     */
    public function getList($arrOpt = [], $arrSort = [], $arrLimit = [])
    {
        $repairProduct = (new ShopRepairProduct())->getTable();

        $sortBy = $arrSort['sortBy'] ?? 'id';
        $sortOrder = $arrSort['sortOrder'] ?? 'asc';
        $step = $arrLimit['step'] ?? 0;
        $limit = $arrLimit['limit'] ?? 0;

        //$data = $this->leftJoin($repairProduct, $repairProduct . '.repair_id', $this->getTable() . '.id');
        $data = $this;
        $data = $data->orderBy($sortBy, $sortOrder);
        if(count($arrOpt = [])) {
            foreach ($arrOpt as $key => $value) {
                $data = $data->where($key, $value);
            }
        }
        if((int)$limit) {
            $start = $step * $limit;
            $data = $data->offset((int)$start)->limit((int)$limit);
        }
        $data = $data->get();
        return $data;
    }

    /**
     * Process list full cactegory
     *
     * @return  [type]  [return description]
     */
    public static function getListFull()
    {
        if(sc_config('cache_status') && sc_config('cache_repair')) {
            if (!Cache::has('cache_repair')) {
                Cache::put('cache_repair', self::get()->keyBy('id')->toJson(), $seconds = sc_config('cache_time', 0)?:600);
            }
            return Cache::get('cache_repair');
        } else {
            return  self::get()->keyBy('id')->toJson();
        }
    }


    /**
     * Get repair detail
     *
     * @param   [string]  $key     [$key description]
     * @param   [string]  $type  [id, alias]
     *
     */
    public function getDetail($key, $type = null, $status = 1)
    {
        if(empty($key)) {
            return null;
        }
        $repairProduct = (new ShopRepairProduct())->getTable();
        $repairProduct = $this
            ->leftJoin($repairProduct, $repairProduct . '.repair_id', $this->getTable() . '.id');
        if ($type == null) {
            $repairProduct = $repairProduct->where('id', (int) $key);
        } else {
            $repairProduct = $repairProduct->where($type, $key);
        }
        if ($status == 1) {
            $repairProduct = $repairProduct->where('status', 1);
        }
        return $repairProduct->first();
    }


    /**
     * Start new process get data
     *
     * @return  new model
     */
    public function start() {
        return new ShopRepair();
    }



    /**
     * Category root
     */
    public function getCategoryRoot() {
        $this->setStatus(1);
        return $this;
    }



    /**
     * build Query
     */
    public function buildQuery() {
        $repairProduct = (new ShopRepairProduct())->getTable();

        //description
        $query = $this
            ->leftJoin($repairProduct, $repairProduct . '.repair_id', $this->getTable() . '.id');

        if ($this->sc_status !== 'all') {
            $query = $query->where('status', $this->sc_status);
        }


        if (count($this->sc_moreWhere)) {
            foreach ($this->sc_moreWhere as $key => $where) {
                if(count($where)) {
                    $query = $query->where($where[0], $where[1], $where[2]);
                }
            }
        }

        if ($this->sc_random) {
            $query = $query->inRandomOrder();
        } else {
            if (is_array($this->sc_sort) && count($this->sc_sort)) {
                foreach ($this->sc_sort as  $rowSort) {
                    if(is_array($rowSort) && count($rowSort) == 2) {
                        $query = $query->sort($rowSort[0], $rowSort[1]);
                    }
                }
            }
        }

        return $query;
    }

    public static function getArrayRepairName()
    {
        $repairs = ShopRepair::select('id', 'title')->get();

        $arrRepairs = [];
        foreach ($repairs as $key => $repair) {
            $arrRepairs[$repair->id] = $repair->title . ' (' . $repair->title . ')';
        }
        return $arrRepairs;
    }
}

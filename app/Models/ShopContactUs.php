<?php
#app/Models/ShopContactUs.php
namespace App\Models;

use App\Models\ShopProduct;
use Illuminate\Database\Eloquent\Model;
use App\Models\ModelTrait;


class ShopContactUs extends Model
{
    use ModelTrait;

    public $timestamps = false;
    public $table = SC_DB_PREFIX.'shop_contact';
    protected $guarded = [];
    private static $getList = null;
    protected $connection = SC_CONNECTION;

    public static function getList()
    {
        if (self::$getList == null) {
            self::$getList = self::all();
        }
        return self::$getList;
    }


    /**
     * Get page detail
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
        if ($type == null) {
            $data = $this->where('id', (int) $key);
        } else {
            $data = $this->where($type, $key);
        }
        if ($status == 1) {
            $data = $data->where('status', 1);
        }
        return $data->first();
    }

    public static function getOne($key, $status = 1)
    {

        if(empty($key)) {
            return null;
        }
            $data = self::get()->keyBy('id');
        if ($status == 1) {
            $data = $data->where('status', 1);
        }
       $data = $data->where('id',$key);
        return $data->first();
    }



    /**
     * build Query
     */
    public function buildQuery() {
        $query = $this;
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
}

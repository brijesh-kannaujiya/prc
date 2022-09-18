<?php
#app/Models/ShopLink.php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;

class ShopLink extends Model
{
    use Searchable;

    public $timestamps = false;
    public $table = SC_DB_PREFIX.'shop_link';
    protected $guarded = [];
    protected $connection = SC_CONNECTION;
    protected static $getGroup = null;
    protected  $sc_parent = ''; // link id parent

    const SEARCHABLE_FIELDS = ['id', 'url','name'];

    public function toSearchableArray()
    {

        return $this->only(self::SEARCHABLE_FIELDS);
    }

    public function searchableAs()
    {
        return 'Menus';
    }

    public function childs() {

        return $this->hasMany(ShopLink::class,'parent','id') ;

    }




    public static function getGroup()
    {
        if (!self::$getGroup) {
            self::$getGroup = self::where('status', 1)
                ->orderBy('sort', 'asc')
                ->orderBy('id', 'desc')
                ->get()->groupBy('group');
        }
        return self::$getGroup;
    }

    public static function getList($arrOpt = [], $arrSort = [], $arrLimit = [])
    {
        $sortBy = $arrSort['sortBy'] ?? null;
        $sortOrder = $arrSort['sortOrder'] ?? 'asc';
        $step = $arrLimit['step'] ?? 0;
        $limit = $arrLimit['limit'] ?? 0;
        $data = new ShopLink();
        if(count($arrOpt)) {
            foreach ($arrOpt as $key => $value) {
                $data = $data->where($key, $value);
            }
        }
        if((int)$limit) {
            $start = $step * $limit;
            $data = $data->offset((int)$start)->limit((int)$limit);
        }
       if($sortBy) {
           $data = $data->orderBy($sortBy, $sortOrder);
       }
        $data = $data->get()->groupBy('parent');
        return $data;
    }

    public function getTreeLinks($parent = 0, &$tree = [], $links = null, &$st = '')
    {
        $links = $links ?? $this->getList();
        $tree = $tree ?? [];
        $lisLink = $links[$parent] ?? [];
        if ($lisLink) {
            foreach ($lisLink as $link) {
                $tree[$link['id']] = $st . $link['name'];
                if (!empty($links[$link['id']])) {
                    $st .= '--';
                    $this->getTreeLinks($link['id'],  $tree, $links, $st);
                    $st = '';
                }
            }
        }
        return $tree;
    }
}

<?php
#app/Models/ShopLinkContent.php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ShopLinkContent extends Model
{
    public $timestamps = false;
    public $table = SC_DB_PREFIX.'shop_link_content';
    protected $guarded = [];
    protected $connection = SC_CONNECTION;
    protected static $getGroup = null;
    protected static $keyword = null;

    public static function getGroup()
    {
        if (!self::$getGroup) {
            self::$getGroup = self::where('status', 1)
                ->orderBy('sort', 'desc')
                ->orderBy('id', 'desc')
                ->get()->groupBy('group');
        }
        return self::$getGroup;
    }

    public static function getByKeyword($keyword=null)
    {
        if (!self::$keyword) {
            $content = self::where('status', 1)
                ->where('keyword',$keyword)
                ->get()->first();
        }

        return $content->content;
    }

}

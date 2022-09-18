<?php
#app/Models/AdminHome.php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AdminHome extends Model
{
    public $timestamps = false;
    public $table = SC_DB_PREFIX.'admin_home';
    protected $guarded = [];
    protected static $getAll = null;
    protected $connection = SC_CONNECTION;
    

    public static function getData($id = 1)
    {
        if (self::$getAll == null) {
            self::$getAll = self::find($id);
        }
        return self::$getAll;
    }
}

<?php
#app/Models/ShopCategoryDescription.php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ShopTaskTypeDetails extends Model
{
    public $incrementing  = false;
    public $timestamps    = false;
    public $table = SC_DB_PREFIX.'shop_task_type_details';
    protected $connection = SC_CONNECTION;
    protected $guarded    = [];
}

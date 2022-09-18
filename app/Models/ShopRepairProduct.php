<?php
#app/Models/ShopRepairProduct.php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ShopRepairProduct extends Model
{
    protected $primaryKey = ['repair_id', 'product_id'];
    public $incrementing  = false;
    protected $guarded    = [];
    public $timestamps    = false;
    public $table = SC_DB_PREFIX.'repair_product';
    protected $connection = SC_CONNECTION;

    public function repairs()
    {
        return $this->belongsTo(ShopRepair::class, 'repair_id', 'id');
    }

    public function products()
    {
        return $this->belongsTo(ShopProduct::class, 'product_id', 'id');
    }
}

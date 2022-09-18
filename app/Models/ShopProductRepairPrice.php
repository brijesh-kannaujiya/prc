<?php
#app/Models/ShopProductAttribute.php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ShopProductRepairPrice extends Model
{
    public $timestamps = false;
    public $table = SC_DB_PREFIX.'shop_product_repair_price';
    protected $guarded = [];
    protected $connection = SC_CONNECTION;

    public function repair(){
        return $this->belongsTo(ShopRepair::class,'id','repair_id');
    }
    public function product(){
        return $this->belongsTo(ShopProduct::class,'id','product_id');
    }



}

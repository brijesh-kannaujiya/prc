<?php
#app/Models/ShopProductDescription.php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;

class ShopProductDescription extends Model
{
    use Searchable;
    protected $primaryKey = 'product_id';
    //public $incrementing  = false;
    protected $guarded    = [];
    public $timestamps    = false;
    public $table = SC_DB_PREFIX.'shop_product_description';
    protected $connection = SC_CONNECTION;

    const SEARCHABLE_FIELDS = ['product_id','name', 'alias'];


    public function toSearchableArray()
    {

        $a = $this->toArray();
        $products = $this->product()->get(['alias'])->map( function ($company) {
            return $company['alias'];
        });
        $a['alias'] = implode(' ', $products->toArray());

        return $this->only(self::SEARCHABLE_FIELDS);
    }


    public function product()
    {
        return $this->belongsTo(ShopProduct::class, 'product_id', 'id');
    }

}

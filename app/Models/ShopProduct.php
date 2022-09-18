<?php
#app/Models/ShopProduct.php
namespace App\Models;

use App\Models\ShopAttributeGroup;
use App\Models\ShopCategory;
use App\Models\ShopProductCategory;
use App\Models\ShopProductDescription;
use App\Models\ShopProductGroup;
use App\Models\ShopProductPromotion;
use App\Models\ShopTax;
use DB;
use Illuminate\Database\Eloquent\Model;
use Cache;
use App\Models\ModelTrait;
use Laravel\Scout\Searchable;
use phpDocumentor\Reflection\DocBlock\Description;

class ShopProduct extends Model
{
    use ModelTrait;
    public $table = SC_DB_PREFIX.'shop_product';
    protected $guarded = [];

    protected $connection = SC_CONNECTION;

    protected  $sc_kind = 'all'; // 0:single, 1:bundle, 2:group
    protected  $sc_virtual = 'all'; // 0:physical, 1:download, 2:only view, 3: Service
    protected  $sc_promotion = 0; // 1: only produc promotion,
    protected  $sc_array_ID = []; // array ID product
    protected  $sc_category = []; // array category id
    protected  $sc_brand = []; // array brand id
    protected  $sc_supplier = []; // array supplier id


    public function brand()
    {
        return $this->belongsTo(ShopBrand::class, 'brand_id', 'id');
    }
    public function categories()
    {
        return $this->belongsToMany(ShopCategory::class, ShopProductCategory::class, 'product_id', 'category_id');
    }

    public function repairs(){
        return $this->belongsToMany(ShopRepair::class,ShopRepairProduct::class,'product_id','repair_id');
    }


    public function repairProduct()
    {
        return $this->hasMany(ShopRepairProduct::class, 'product_id', 'id');
    }
   /* public function repairs()
    {
        return $this->belongsToMany(ShopRepair::class, SC_DB_PREFIX . 'repair_product', 'repair_id', 'product_id');
    }
    public function repairs()
    {
        return $this->hasMany(ShopRepairProduct::class, 'product_id', 'product_id');
    }*/
    public function descriptions()
    {
        return $this->hasMany(ShopProductDescription::class, 'product_id', 'id');
    }

 public function test()
    {
        return $this->hasOne(ShopProductDescription::class,'product_id','id');
    }

    public function attributes()
    {
        return $this->hasMany(ShopProductAttribute::class, 'product_id', 'id');
    }
 public function repairPrice()
    {
        return $this->hasMany(ShopProductRepairPrice::class, 'product_id', 'id');
    }



    /**
     * Get product detail
     * @param  [string] $key [description]
     * @param  [string] $type id, sku, alias
     * @param  [''|int] $status 
     * '' if is all status
     * @return [type]     [description]
     */
    public function getDetail($key = null, $type = null,  $status = 1)
    {
        if(empty($key)) {
            return null;
        }
        $tableDescription = (new ShopProductDescription)->getTable();
        $tableProductCat = (new ShopProductCategory)->getTable();
        $product = $this
            ->leftJoin($tableDescription, $tableDescription . '.product_id', $this->getTable() . '.id')
            ->where($tableDescription . '.lang', sc_get_locale())
            ->leftJoin($tableProductCat,$tableProductCat.'.product_id', $this->getTable() . '.id');
        if(empty($type)) {
            $product = $product->where('id', (int)$key);  
        } elseif ($type == 'alias') {
            $product = $product->where('alias', $key);
        } else {
            return null;
        }
        if($status) {
            $product = $product->where('status', (int)$status);
        }
        
        //$product = $product->with('images');
        $product = $product->first();
        return $product;
    }

    protected static function boot()
    {
        parent::boot();
        // before delete() method call this
        static::deleting(function ($product) {
            $product->descriptions()->delete();
            $product->attributes()->delete();
            $product->categories()->detach();
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

    /**
     * [getUrl description]
     * @return [type] [description]
     */
    public function getUrl()
    {
        return route('product.detail', ['alias' => $this->alias]);
    }


    /**
     * [getArrayProductName description]
     * @return [type] [description]
     */
    public static function getArrayProductName()
    {
        $products = ShopProductDescription::select('product_id','name')->get();

        $arrProduct = [];
        foreach ($products as $key => $product) {
            $arrProduct[$product->product_id] = $product->name;
        }
        return $arrProduct;
    }

    public function renderAttributeDetails()
    {
        return  view('templates.'.sc_store('template').'.common.render_attribute', 
        [
            'details' => $this->attributes()->get()->groupBy('attribute_group_id'),
            'groups' => ShopAttributeGroup::getList(),
        ]);
    }



//Scort
    public function scopeSort($query, $sortBy = null, $sortOrder = 'desc')
    {
        $sortBy = $sortBy ?? 'id';
        return $query->orderBy($sortBy, $sortOrder);
    }

      /**
     * Get list product
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
        $sortBy = $arrSort['sortBy'] ?? 'sort';
        $sortOrder = $arrSort['sortOrder'] ?? 'asc';
        $step = $arrLimit['step'] ?? 0;
        $limit = $arrLimit['limit'] ?? 0;

        $data = $this->sort($sortBy, $sortOrder);
        if(count($arrOpt = [])) {
            foreach ($arrOpt as $key => $value) {
                $data = $data->where($key, $value);
            }
        }
        if((int)$limit) {
            $start = $step * $limit;
            $data = $data->offset((int)$start)->limit((int)$limit);
        }

        $data = $data->get()->keyBy('id');

        return $data;
    }

    /**
     * Process list full product
     *
     * @return  [type]  [return description]
     */
    public static function getListFull()
    {
        if(sc_config('cache_status') && sc_config('cache_product')) {
            if (!Cache::has('cache_product')) {
                Cache::put('cache_product', self::get()->keyBy('id')->toJson(), $seconds = sc_config('cache_time', 0)?:600);
            }
            return Cache::get('cache_product');
        } else {
            return  self::get()->keyBy('id')->toJson();
        }
    }

    /**
     * Start new process get data
     *
     * @return  new model
     */
    public function start() {
        return new ShopProduct;
    }
    



    /**
     * Set array category 
     *
     * @param   [array|int]  $category 
     *
     */
    private function setCategory($category) {
        if (is_array($category)) {
            $this->sc_category = $category;
        } else {
            $this->sc_category = array((int)$category);
        }
        return $this;
    }

    /**
     * Set array brand 
     *
     * @param   [array|int]  $brand 
     *
     */
    private function setBrand($brand) {
        if (is_array($brand)) {
            $this->sc_brand = $brand;
        } else {
            $this->sc_brand = array((int)$brand);
        }
        return $this;
    }



    /**
     * Set array ID product 
     *
     * @param   [array|int]  $arrID 
     *
     */
    private function setArrayID($arrID) {
        if (is_array($arrID)) {
            $this->sc_array_ID = $arrID;
        } else {
            $this->sc_array_ID = array((int)$arrID);
        }
        return $this;
    }




    /**
     * Get product to array Catgory
     * @param   [array|int]  $arrCategory 
     */
    public function getProductToCategory($arrCategory) {
        $this->setStatus(1);
        $this->setCategory($arrCategory);
        return $this;
    }

    /**
     * Get product to array Brand
     * @param   [array|int]  $arrBrand 
     */
    public function getProductToBrand($arrBrand) {
        $this->setStatus(1);
        $this->setBrand($arrBrand);
        return $this;
    }
    


    /**
     * Get product latest
     */
    public function getProductLatest() {
        $this->setStatus(1);
        $this->setLimit(10);
        $this->setSort(['id', 'desc']);
        return $this;
    }


    /**
     * build Query
     */
    public function buildQuery() {

        $tableDescription = (new ShopProductDescription)->getTable();


        //description
        $query = $this
            ->leftJoin($tableDescription, $tableDescription . '.product_id', $this->getTable() . '.id')
            ->where($tableDescription . '.lang', sc_get_locale());

        //search keyword
        if ($this->sc_keyword !='') {
            $query = $query->where(function ($sql) use($tableDescription){
                $sql->where($tableDescription . '.name', 'like', '%' . $this->sc_keyword . '%')
                ->orWhere($tableDescription . '.keyword', 'like', '%' . $this->sc_keyword . '%')
                ->orWhere($tableDescription . '.description', 'like', '%' . $this->sc_keyword . '%')
                ->orWhere($this->getTable() . '.sku', 'like', '%' . $this->sc_keyword . '%');
            });
        }


        if (count($this->sc_category)) {
            $query = $query->leftJoin((new ShopProductCategory)->getTable(), (new ShopProductCategory)->getTable() . '.product_id', $this->getTable() . '.id');
            $query = $query->whereIn((new ShopProductCategory)->getTable() . '.category_id', $this->sc_category);
        }

        if (count($this->sc_array_ID)) {
            $query = $query->whereIn('id', $this->sc_array_ID);
        }

        if ($this->sc_status !== 'all') {
            $query = $query->where('status', $this->sc_status);
        }

        if (count($this->sc_brand)) {
            $query = $query->whereIn('brand_id', $this->sc_brand);
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

        //Hidden product out of stock
        if (empty(sc_config('product_display_out_of_stock'))) {
            $query = $query->where('stock', '>', 0);
        }

        return $query;
    }

}

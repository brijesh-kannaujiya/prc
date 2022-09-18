<?php

namespace App\Models;

use App\Admin\Models\AdminUser;
use Illuminate\Database\Eloquent\Model;
use \App\Models\ModelTrait;

class ShopTask extends Model
{
    use ModelTrait;

    public $timestamps = false;
    public $table = SC_DB_PREFIX . 'admin_tasks';
    protected $guarded = [];
    protected $connection = SC_CONNECTION;

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'is_complete' => 'boolean',
    ];

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title',
        'is_complete',
    ];

    /**
     * The relationship to the owning user.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->hasMany(AdminUser::class,  'id', 'user_id');
    }

    public function tasktype()
    {
        return $this->hasMany(ShopTaskTypeDetails::class, 'task_id', 'id');
    }

}

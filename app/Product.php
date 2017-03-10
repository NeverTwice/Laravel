<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property integer $typeid
 * @property integer $siteid
 * @property string $code
 * @property string $label
 * @property string $config
 * @property string $start
 * @property string $end
 * @property integer $status
 * @property string $mtime
 * @property string $ctime
 * @property string $editor
 * @property MshopProductType $mshopProductType
 * @property MshopProductList[] $mshopProductLists
 * @property MshopProductProperty[] $mshopProductProperties
 */
class Product extends Model
{
    public $timestamps = false;
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'mshop_product';

    /**
     * @var array
     */
    protected $fillable = ['typeid', 'siteid', 'code', 'label', 'config', 'start', 'end', 'status', 'mtime', 'ctime', 'editor'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function mshopProductType()
    {
        return $this->belongsTo('App\MshopProductType', 'typeid');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function mshopProductLists()
    {
        return $this->hasMany('App\MshopProductList', 'parentid');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function mshopProductProperties()
    {
        return $this->hasMany('App\MshopProductProperty', 'parentid');
    }
}

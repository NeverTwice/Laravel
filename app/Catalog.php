<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property integer $parentid
 * @property integer $typeid
 * @property integer $siteid
 * @property string $domain
 * @property string $refid
 * @property string $start
 * @property string $end
 * @property string $config
 * @property integer $pos
 * @property integer $status
 * @property string $mtime
 * @property string $ctime
 * @property string $editor
 * @property MshopCatalog $mshopCatalog
 * @property MshopCatalogListType $mshopCatalogListType
 */
class Catalog extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'mshop_catalog_list';

    /**
     * @var array
     */
    protected $fillable = ['parentid', 'typeid', 'siteid', 'domain', 'refid', 'start', 'end', 'config', 'pos', 'status', 'mtime', 'ctime', 'editor'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function mshopCatalog()
    {
        return $this->belongsTo('App\MshopCatalog', 'parentid');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function mshopCatalogListType()
    {
        return $this->belongsTo('App\MshopCatalogListType', 'typeid');
    }
}
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Sportentity extends Model
{
    /*
    |--------------------------------------------------------------------------
    | GLOBAL VARIABLES
    |--------------------------------------------------------------------------
    */

    protected $table = 'sportentities';
    protected $primaryKey = 'id';
    public $timestamps = true;
    protected $guarded = ['id'];
    protected $fillable = [
        'sportentity_id', 'sport_name', 'sourcecategory_id', 'source_id', 'sportentitiable_id', 'sportentitiable_type',
        'name', 'alternative_name', 'image', 'president', 'technicaldirector', 'cadpresident', 'address', 'phone',
        'fax', 'email', 'url'
    ];
    protected $hidden = ['created_at', 'updated_at'];
    protected $dates = ['created_at', 'updated_at'];
    protected $appends = [];

    /*
    |--------------------------------------------------------------------------
    | RELATIONS
    |--------------------------------------------------------------------------
    */
    public function sourcecategory()
    {
        return $this->belongsTo('App\Models\Sourcecategory');
    }
    public function sportentity()
    {
        return $this->belongsTo('App\Models\Sportentity');
    }
    public function clubs()
    {
        return $this->belongsToMany('App\Models\Club');
    }
    public function competitions()
    {
        return $this->hasMany('App\Models\Competition');
    }
    public function sportentities()
    {
        return $this->hasMany('App\Models\Sportentity');
    }
    public function sportentitiable()
    {
        return $this->morphTo();
    }

    /*
    |--------------------------------------------------------------------------
    | SCOPES
    |--------------------------------------------------------------------------
    */

    /*
    |--------------------------------------------------------------------------
    | ACCESORS
    |--------------------------------------------------------------------------
    */

    /*
    |--------------------------------------------------------------------------
    | MUTATORS
    |--------------------------------------------------------------------------
    */

    /*
    |--------------------------------------------------------------------------
    | FUNCTIONS
    |--------------------------------------------------------------------------
    */
}

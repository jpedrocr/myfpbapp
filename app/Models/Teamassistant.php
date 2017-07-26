<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Teamassistant extends Model
{
    /*
    |--------------------------------------------------------------------------
    | GLOBAL VARIABLES
    |--------------------------------------------------------------------------
    */

    protected $table = 'teamassistants';
    protected $primaryKey = 'id';
    public $timestamps = true;
    protected $guarded = ['id'];
    protected $fillable = ['sourcecategory_id', 'source_id', 'license'];
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
    public function teamassistantregistrations()
    {
        return $this->hasMany('App\Model\Teamassistantregistration');
    }
    public function sportagents()
    {
        return $this->morphMany('App\Models\Sportagent', 'sportagentable');
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

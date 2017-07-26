<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Athlete extends Model
{
    /*
    |--------------------------------------------------------------------------
    | GLOBAL VARIABLES
    |--------------------------------------------------------------------------
    */

    protected $table = 'athletes';
    protected $primaryKey = 'id';
    public $timestamps = true;
    protected $guarded = ['id'];
    protected $fillable = ['sourcecategory_id', 'source_id', 'license', 'startdate', 'nationality'];
    protected $hidden = ['created_at', 'updated_at'];
    protected $dates = ['startdate', 'created_at', 'updated_at'];
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
    public function athleteregistrations()
    {
        return $this->hasMany('App\Model\Athleteregistration');
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

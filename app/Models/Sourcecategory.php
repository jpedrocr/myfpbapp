<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Sourcecategory extends Model
{
    /*
    |--------------------------------------------------------------------------
    | GLOBAL VARIABLES
    |--------------------------------------------------------------------------
    */

    protected $table = 'sourcecategories';
    protected $primaryKey = 'id';
    public $timestamps = true;
    protected $guarded = ['id'];
    protected $fillable = ['source_id', 'name'];
    protected $hidden = ['created_at', 'updated_at'];
    protected $dates = ['created_at', 'updated_at'];
    protected $appends = [];

    /*
    |--------------------------------------------------------------------------
    | RELATIONS
    |--------------------------------------------------------------------------
    */
    public function athletes()
    {
        return $this->hasMany('App\Models\Athlete');
    }
    public function clubs()
    {
        return $this->hasMany('App\Models\Club');
    }
    public function coaches()
    {
        return $this->hasMany('App\Models\Coach');
    }
    public function competitions()
    {
        return $this->hasMany('App\Models\Competition');
    }
    public function games()
    {
        return $this->hasMany('App\Models\Game');
    }
    public function sportentities()
    {
        return $this->hasMany('App\Models\Sportentity');
    }
    public function teamassistants()
    {
        return $this->hasMany('App\Models\Teamassistant');
    }
    public function teams()
    {
        return $this->hasMany('App\Models\Team');
    }
    public function therapists()
    {
        return $this->hasMany('App\Models\Therapist');
    }
    public function venues()
    {
        return $this->hasMany('App\Models\Venue');
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

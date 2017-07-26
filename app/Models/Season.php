<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Season extends Model
{
    /*
    |--------------------------------------------------------------------------
    | GLOBAL VARIABLES
    |--------------------------------------------------------------------------
    */

    protected $table = 'seasons';
    protected $primaryKey = 'id';
    public $timestamps = true;
    protected $guarded = ['id'];
    protected $fillable = ['source_id', 'start_year', 'end_year', 'current'];
    protected $hidden = ['created_at', 'updated_at'];
    protected $dates = ['created_at', 'updated_at'];
    protected $appends = [];

    /*
    |--------------------------------------------------------------------------
    | RELATIONS
    |--------------------------------------------------------------------------
    */
    public function athleteregistrations()
    {
        return $this->hasMany('App\Models\Athleteregistration');
    }
    public function coachregistrations()
    {
        return $this->hasMany('App\Models\Coachregistration');
    }
    public function competitions()
    {
        return $this->hasMany('App\Models\Competition');
    }
    public function teamassistantregistrations()
    {
        return $this->hasMany('App\Models\Teamassistantregistration');
    }
    public function teams()
    {
        return $this->hasMany('App\Models\Team');
    }
    public function therapistregistrations()
    {
        return $this->hasMany('App\Models\Therapistregistration');
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

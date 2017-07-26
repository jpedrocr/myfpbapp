<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Athleteregistration extends Model
{
    /*
    |--------------------------------------------------------------------------
    | GLOBAL VARIABLES
    |--------------------------------------------------------------------------
    */

    protected $table = 'athleteregistrations';
    protected $primaryKey = 'id';
    public $timestamps = true;
    protected $guarded = ['id'];
    protected $fillable = ['athlete_id', 'club_id', 'season_id', 'agegroup_id'];
    protected $hidden = ['created_at', 'updated_at'];
    protected $dates = ['created_at', 'updated_at'];
    protected $appends = [];

    /*
    |--------------------------------------------------------------------------
    | RELATIONS
    |--------------------------------------------------------------------------
    */
    public function agegroup()
    {
        return $this->belongsTo('App\Models\Agegroup');
    }
    public function athlete()
    {
        return $this->belongsTo('App\Models\Athlete');
    }
    public function club()
    {
        return $this->belongsTo('App\Models\Club');
    }
    public function season()
    {
        return $this->belongsTo('App\Models\Season');
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

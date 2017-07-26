<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Therapistregistration extends Model
{
    /*
    |--------------------------------------------------------------------------
    | GLOBAL VARIABLES
    |--------------------------------------------------------------------------
    */

    protected $table = 'therapistregistrations';
    protected $primaryKey = 'id';
    public $timestamps = true;
    protected $guarded = ['id'];
    protected $fillable = ['therapist_id', 'club_id', 'season_id'];
    protected $hidden = ['created_at', 'updated_at'];
    protected $dates = ['created_at', 'updated_at'];
    protected $appends = [];

    /*
    |--------------------------------------------------------------------------
    | RELATIONS
    |--------------------------------------------------------------------------
    */
    public function club()
    {
        return $this->belongsTo('App\Models\Club');
    }
    public function season()
    {
        return $this->belongsTo('App\Models\Season');
    }
    public function therapist()
    {
        return $this->belongsTo('App\Models\Therapist');
    }
    public function therapistregistrationroles()
    {
        return $this->hasMany('App\Model\Therapistregistrationrole');
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

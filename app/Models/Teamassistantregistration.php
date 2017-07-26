<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Teamassistantregistration extends Model
{
    /*
    |--------------------------------------------------------------------------
    | GLOBAL VARIABLES
    |--------------------------------------------------------------------------
    */

    protected $table = 'teamassistantregistrations';
    protected $primaryKey = 'id';
    public $timestamps = true;
    protected $guarded = ['id'];
    protected $fillable = ['teamassistant_id', 'club_id', 'season_id'];
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
    public function teamassistant()
    {
        return $this->belongsTo('App\Models\Teamassistant');
    }
    public function teamassistantregistrationroles()
    {
        return $this->hasMany('App\Model\Teamassistantregistrationrole');
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

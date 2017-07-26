<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Club extends Model
{
    /*
    |--------------------------------------------------------------------------
    | GLOBAL VARIABLES
    |--------------------------------------------------------------------------
    */

    protected $table = 'clubs';
    protected $primaryKey = 'id';
    public $timestamps = true;
    protected $guarded = ['id'];
    protected $fillable = ['sourcecategory_id', 'source_id', 'name', 'alternative_name', 'image', 'founding_date', 'president', 'address', 'venue_id', 'phone', 'fax', 'email', 'url'];
    protected $hidden = ['created_at', 'updated_at'];
    protected $dates = ['founding_date', 'created_at', 'updated_at'];
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
    public function venue()
    {
        return $this->belongsTo('App\Models\Venue');
    }
    public function sportentities()
    {
        return $this->belongsToMany('App\Models\Sportentity');
    }
    public function athleteregistrations()
    {
        return $this->hasMany('App\Model\Athleteregistration');
    }
    public function coachregistrations()
    {
        return $this->hasMany('App\Model\Coachregistration');
    }
    public function teamassistantregistrations()
    {
        return $this->hasMany('App\Model\Teamassistantregistration');
    }
    public function teams()
    {
        return $this->hasMany('App\Model\Team');
    }
    public function therapistregistrations()
    {
        return $this->hasMany('App\Model\Therapistregistration');
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

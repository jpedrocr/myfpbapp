<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    /*
    |--------------------------------------------------------------------------
    | GLOBAL VARIABLES
    |--------------------------------------------------------------------------
    */

    protected $table = 'teams';
    protected $primaryKey = 'id';
    public $timestamps = true;
    protected $guarded = ['id'];
    protected $fillable = [
        'club_id', 'sourcecategory_id', 'source_id', 'name', 'alternative_name', 'image', 'season_id', 'agegroup_id',
        'competitionlevel_id', 'venue_id'
    ];
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
    public function club()
    {
        return $this->belongsTo('App\Models\Club');
    }
    public function competitionlevel()
    {
        return $this->belongsTo('App\Models\Competitionlevel');
    }
    public function season()
    {
        return $this->belongsTo('App\Models\Season');
    }
    public function sourcecategory()
    {
        return $this->belongsTo('App\Models\Sourcecategory');
    }
    public function venue()
    {
        return $this->belongsTo('App\Models\Venue');
    }
    public function competitions()
    {
        return $this->belongsToMany('App\Models\Competition');
    }
    public function phases()
    {
        return $this->belongsToMany('App\Models\Phase');
    }
    public function classifications()
    {
        return $this->hasMany('App\Model\Classification');
    }
    public function homegames()
    {
        return $this->hasMany('App\Model\Game', 'hometeam_id');
    }
    public function outgames()
    {
        return $this->hasMany('App\Model\Game', 'outteam_id');
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

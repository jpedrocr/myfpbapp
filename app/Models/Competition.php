<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Competition extends Model
{
    /*
    |--------------------------------------------------------------------------
    | GLOBAL VARIABLES
    |--------------------------------------------------------------------------
    */

    protected $table = 'competitions';
    protected $primaryKey = 'id';
    public $timestamps = true;
    protected $guarded = ['id'];
    protected $fillable = ['sportentity_id', 'season_id', 'agegroup_id', 'competitionlevel_id', 'sourcecategory_id', 'source_id', 'name', 'alternative_name', 'image'];
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
    public function sportentity()
    {
        return $this->belongsTo('App\Models\Sportentity');
    }
    public function teams()
    {
        return $this->belongsToMany('App\Models\Team');
    }
    public function phases()
    {
        return $this->hasMany('App\Model\Phase');
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

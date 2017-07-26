<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    /*
    |--------------------------------------------------------------------------
    | GLOBAL VARIABLES
    |--------------------------------------------------------------------------
    */

    protected $table = 'games';
    protected $primaryKey = 'id';
    public $timestamps = true;
    protected $guarded = ['id'];
    protected $fillable = [
        'round_id', 'sourcecategory_id', 'source_id', 'team_id', 'team_id', 'number', 'schedule', 'home_result',
        'out_result', 'venue_id', 'status'
    ];
    protected $hidden = ['created_at', 'updated_at'];
    protected $dates = ['schedule', 'created_at', 'updated_at'];
    protected $appends = [];

    /*
    |--------------------------------------------------------------------------
    | RELATIONS
    |--------------------------------------------------------------------------
    */
    public function hometeam()
    {
        return $this->belongsTo('App\Models\Team', 'hometeam_id');
    }
    public function outteam()
    {
        return $this->belongsTo('App\Models\Team', 'outteam_id');
    }
    public function round()
    {
        return $this->belongsTo('App\Models\Round');
    }
    public function sourcecategory()
    {
        return $this->belongsTo('App\Models\Sourcecategory');
    }
    public function venue()
    {
        return $this->belongsTo('App\Models\Venue');
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

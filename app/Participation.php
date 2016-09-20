<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Participation extends Model
{
    //
    protected $table = 'participations';
    public function activity() //relacion con tabla activities
    {
        return $this->belongsTo('App\Activity','activities_id');
    }
    public function user() //relacion con tabla user
    {
        return $this->belongsTo('App\User','users_id');
    }
}

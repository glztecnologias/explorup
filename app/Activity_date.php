<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Activity_date extends Model
{
    //
    protected $table = 'activity_dates';
    public function activity() //relacion con tabla activities
    {
        return $this->belongsTo('App\Activity','activities_id');
    }
}

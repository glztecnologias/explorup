<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Activity_item extends Model
{
    //
    protected $table = 'activity_items';
    public function activity() //relacion con tabla activities
    {
        return $this->belongsTo('App\Activity','activities_id');
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    //
    protected $table = 'videos';
    public function activity() //relacion con tabla activities
    {
        return $this->belongsTo('App\Activity','activities_id');
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    //
    protected $table = 'photos';
    public function activity() //relacion con tabla activities
    {
        return $this->belongsTo('App\Activity','activities_id');
    }
}

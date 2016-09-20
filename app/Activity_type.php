<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Activity_type extends Model
{
    //
    protected $table = 'activity_types';
    public function tourism_type() //relacion con tabla tipo de turismo
    {
        return $this->belongsTo('App\Tourism_type','tourism_types_id');
    }
}

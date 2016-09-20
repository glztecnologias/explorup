<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Activity extends Model
{
    //
    protected $table = 'activities';
    public function activity_type() //relacion con tipo de actividades
    {
        return $this->belongsTo('App\Activity_type','activity_types_id');
    }
    public function agency() //relacion con agencia de turismo
    {
        return $this->belongsTo('App\Agency','agencies_id');
    }
}

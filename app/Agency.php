<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Agency extends Model
{
    //
    protected $table = 'agencies';
    public function tourism_type() //relacion con tabla tipo de turismo
    {
        return $this->belongsTo('App\Tourism_type','tourism_types_id');
    }
}

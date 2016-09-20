<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Agency_photo extends Model
{
    //
    protected $table = 'agency_photos';

    public function agency() //relacion con agencia de turismo
    {
        return $this->belongsTo('App\Agency','agencies_id');
    }
}

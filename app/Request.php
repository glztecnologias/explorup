<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Request extends Model
{
    //
    protected $table = 'requests';
    public function activity() //relacion con tabla activities
    {
        return $this->belongsTo('App\Activity','activities_id');
    }
    public function user() //relacion con tabla user
    {
        return $this->belongsTo('App\User','users_id');
    }
    public function request_type() //relacion con tabla tipo de solicitud
    {
        return $this->belongsTo('App\Request_type','request_types_id');
    }
}

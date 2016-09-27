<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Route_item extends Model
{
    //
    protected $table = 'route_items';
    public function route() //relacion con tabla activities
    {
        return $this->belongsTo('App\Route','routes_id');
    }
}

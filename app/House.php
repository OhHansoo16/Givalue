<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class House extends Model
{
    protected $fillable = [
        'house_name',
        'floor_plan',
        'age',
        'land_area',
        'building_area',
        'address',
        'detail'
    ];//
    
    public function renovations()
    {
        return $this->hasMany('App\Renovation');  
    }
}

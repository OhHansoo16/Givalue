<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Renovation extends Model
{
    
    protected $fillable = [
        'concept',
        'renovation_detail',
        'house_id'
    ];//
    
    public function house()
    {
        return $this->belongsTo('App\House');
    }//
}

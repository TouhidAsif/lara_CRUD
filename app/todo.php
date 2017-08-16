<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class todo extends Model
{
    //public function getBodyAttribute($value)//{
        
    //     return ucfirst($value);  //accessor
    //}
     public function setTitleAttribute($value){
         return $this->attributes['title'] = ucfirst($value); //mutators
    }
    public function setBodyAttribute($value){
         return $this->attributes['body'] = ucfirst($value); //mutators
    }
}

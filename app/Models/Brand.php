<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Brand extends Model
{
 
    use HasFactory,HasTranslations;
  
    public $translatable = ['name'];
    protected $guarded = [];

    public function cars(){
        return $this->hasMany(Car::class,'brand_id');
    }



    public function discount(){
        return $this->hasOne(Bigdiscount::class,'brand_id');
    }


  
}

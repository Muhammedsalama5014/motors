<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Car extends Model
{
    use HasFactory,HasTranslations;
  
    public $translatable = ['name','desc','color','seats','type'];
    protected $guarded = [];



    //car belogs to model a, barnd , cat 

    public function cat(){
        return $this->belongsTo(Cat::class);
    }


    public function modelcar(){
        return $this->belongsTo(ModelCar::class,'model_car_id');
    }


    public function brand(){
        return $this->belongsTo(Brand::class,'brand_id');
    }


     public function images()
    {
        return $this->morphMany(Image::class , 'imageable');
    }

//many to many relation between car & order

    public function orders(){
        return $this->belongsToMany(Order::class,'order_details');
    }

    public function discount(){
        return $this->hasOne(Discount::class,'car_id');
    }


   
 
}

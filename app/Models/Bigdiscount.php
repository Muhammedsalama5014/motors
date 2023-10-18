<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Bigdiscount extends Model
{
    use HasFactory,HasTranslations;

    public $translatable = ['name'];
    protected $guarded = [];

    public function brand(){
        return $this->belongsTo(Brand::class,'brand_id');
    }

    public function model(){
        return $this->belongsTo(ModelCar::class,'model_car_id');
    }

    public function cat(){
        return $this->belongsTo(Cat::class,'cat_id');
    }

}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Discount extends Model
{
    use HasFactory,HasTranslations;

    public $translatable = ['name'];
    protected $guarded = [];

   

    //

    public function car(){
        return $this->belongsTo(Car::class,'car_id');
    }


}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Order extends Model
{
    use HasFactory,SoftDeletes;
    protected $guarded = [];
    protected $fillable = ['name','email','address','user_id','phone',
    'id_number',
    'price',
    'total_price',
    'number_days',
    'start_date',
    'exp_date',
    'qty',
    'status',
    'client_address',
        "car_id"

];



//many to many relation between car & order
    public function cars(){
        return $this->belongsToMany(Car::class,'order_details');
    }
//user has many order
    public function user(){
        return $this->belongsTo(User::class,'user_id');
    }
    public function car(){
        return $this->belongsTo(Car::class,'car_id');
    }

}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Personalinformation extends Model
{
    use HasFactory;
    protected $guarded = [];


      //info belongs to one user
      public function user(){
        return $this->belongsTo(User::class,);
    }
}

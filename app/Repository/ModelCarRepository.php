<?php

namespace App\Repository ;


use App\Interface\BrandInterface;
use App\Interface\ModelCarInterface;
use App\Models\ModelCar;

class ModelCarRepository implements ModelCarInterface{
    
    public function store($request){
        
        ModelCar::create([
            'name'=>[
              'ar' => $request->name_ar,
                'en' => $request->name_en 


              
             ],
        ]);


        
    }



    public function update($request,$model){
         $model->update([
            'name'=>[
                'ar' => $request->name_ar,
                'en' => $request->name_en
             ],
        ]); 
        
    }
    public function delete($model){
        
      $model->delete(); 
    }
}
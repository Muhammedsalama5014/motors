<?php

namespace App\Repository ;

use App\Interface\CrudInterface;
use App\Models\Cat;

class CatRepository implements CrudInterface{
    
    public function store($request){
        
        Cat::create([
            'name'=>[
              'ar' => $request->name_ar,
                'en' => $request->name_en 


              
             ],
        ]);


        
    }



    public function update($request,$cat){
        $cat->update([
            'name'=>[
                'ar' => $request->name_ar,
                'en' => $request->name_en
             ],
        ]);
        
    }
    public function delete($cat){
        $cat->delete();
    }
}
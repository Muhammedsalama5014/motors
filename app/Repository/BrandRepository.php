<?php

namespace App\Repository ;

use App\Models\Cat;
use App\Models\Brand;
use App\Interface\BrandInterface;



class BrandRepository implements BrandInterface{
    
    public function store($request){
        
        Brand::create([
            'name'=>[
              'ar' => $request->name_ar,
                'en' => $request->name_en 


              
             ],
        ]);


        
    }



    public function update($request,$brand){
         $brand->update([
            'name'=>[
                'ar' => $request->name_ar,
                'en' => $request->name_en
             ],
        ]); 
        
    }
    public function delete($brand){
        
      $brand->delete(); 
    }
}
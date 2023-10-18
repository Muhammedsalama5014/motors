<?php

namespace App\Repository ;

use App\Interface\BrancheInterface;

use App\Models\Branche;

class BrancheRepository implements BrancheInterface{
    
    public function store($request){
        
        Branche::create([
            'name'=>[
              'ar' => $request->name_ar,
                'en' => $request->name_en 


              
             ],
        ]);


        
    }



    public function update($request,$branche){
         $branche->update([
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
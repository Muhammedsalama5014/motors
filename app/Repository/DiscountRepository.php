<?php

namespace App\Repository ;

use App\Models\Car;
use App\Models\Cat;
use App\Models\Brand;
use App\Models\Discount;
use App\Models\Bigdiscount;
use App\Interface\BrandInterface;
use App\Interface\DiscountInterface;


class DiscountRepository implements DiscountInterface{
   
 
    public function store($request){
       
        //to count discount day start 
        $discount_end=strtotime($request->discount_end);
        $discount_start=strtotime($request->discount_start);
        $time=$discount_end - $discount_start;
        $discount_days= date('d', $time); 
     //to count discount day end 
      if(!empty($request->cat_id) ||  !empty($request->brand_id) || !empty($request->model_id)){
  


      
      Bigdiscount::create([
         
  
        'cat_id'=>$request->cat_id,
        'brand_id'=> $request->brand_id,
        'model_car_id'=>$request->model_id,
        
      

          'name'=>[
            'ar' => $request->name_ar,
            'en' => $request->name_en 
                 ],
           'discount_value'=>$request->discount_value,
           'discount_type'=>$request->discount_type,
           
           'discount_number'=>$request->discount_number,
           'discount_start'=>$request->discount_start,
           'discount_end'=>$request->discount_end,
           'discount_days'=>$discount_days
           
      ]);
    }else{

      Discount::create([
        'car_id'=> $request->car_id,
     

          'name'=>[
            'ar' => $request->name_ar,
            'en' => $request->name_en 
                 ],
           'discount_value'=>$request->discount_value,
           'discount_type'=>$request->discount_type,
           
           'discount_number'=>$request->discount_number,
           'discount_start'=>$request->discount_start,
           'discount_end'=>$request->discount_end,
           'discount_days'=>$discount_days
           
      ]);
    } 
     /*  
      if(!empty($request->cat_id) ){
        Bigdiscount::create([
         
  
          'cat_id'=>$request->cat_id,
        
  
            'name'=>[
              'ar' => $request->name_ar,
              'en' => $request->name_en 
                   ],
             'discount_value'=>$request->discount_value,
             'discount_type'=>$request->discount_type,
             
             'discount_number'=>$request->discount_number,
             'discount_start'=>$request->discount_start,
             'discount_end'=>$request->discount_end,
             
        ]);
    } elseif( !empty($request->brand_id)) {
      Discountbrand::create([
     
        'brand_id'=>$request->brand_id, Discount::create([
        'car_id'=> $request->car_id,

          'name'=>[
            'ar' => $request->name_ar,
            'en' => $request->name_en 
                 ],
           'discount_value'=>$request->discount_value,
           'discount_type'=>$request->discount_type,
           
           'discount_number'=>$request->discount_number,
           'discount_start'=>$request->discount_start,
           'discount_end'=>$request->discount_end,
           
      ]);
       

          'name'=>[
            'ar' => $request->name_ar,
            'en' => $request->name_en 
                 ],
           'discount_value'=>$request->discount_value,
           'discount_type'=>$request->discount_type,
           
           'discount_number'=>$request->discount_number,
           'discount_start'=>$request->discount_start,
           'discount_end'=>$request->discount_end,
           
      ]);
    }elseif(!empty($request->model_id)){
      Discountmodel::create([
       
        'model_car_id'=>$request->model_id,

          'name'=>[
            'ar' => $request->name_ar,
            'en' => $request->name_en 
                 ],
           'discount_value'=>$request->discount_value,
           'discount_type'=>$request->discount_type,
           
           'discount_number'=>$request->discount_number,
           'discount_start'=>$request->discount_start,
           'discount_end'=>$request->discount_end,
           
      ]);
    }elseif(!empty($request->car_id) ){
      Discount::create([
        'car_id'=> $request->car_id,

          'name'=>[
            'ar' => $request->name_ar,
            'en' => $request->name_en 
                 ],
           'discount_value'=>$request->discount_value,
           'discount_type'=>$request->discount_type,
           
           'discount_number'=>$request->discount_number,
           'discount_start'=>$request->discount_start,
           'discount_end'=>$request->discount_end,
           
      ]);
    }
        */
     
      
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
<?php

namespace App\Repository;

use App\Models\Car;
use App\Models\Cat;

use App\Models\Brand;
use App\Models\Image;
use App\Interface\CarInterface;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class CarRepository implements CarInterface
{

  public function store($request)
  {


    $imagepath = Storage::putFile('cars', $request->img);

    $car = Car::create([
      'name' => [
        'ar' => $request->name_ar,
        'en' => $request->name_en
      ],

      'desc' => [
        'ar' => $request->desc_ar,
        'en' => $request->desc_en
      ],

      'color' => [
        'ar' => $request->color_ar,
        'en' => $request->color_en
      ],


      'type' => [
        'ar' => $request->type_ar,
        'en' => $request->type_en
      ],


      'seats' => [
        'ar' => $request->seats_ar,
        'en' => $request->seats_en
      ],

      'price' => $request->price,
      'cat_id' => $request->cat_id,
      'brand_id' => $request->brand_id,
      'model_car_id' => $request->model_id,
      'img' => $imagepath,


    ]);
    if ($request->hasfile('imgs')) {
      foreach ($request->file('imgs') as $file) {
        $imagepath2 = Storage::putFile('cars', $file);

        $images = new Image();
        $images->filename = $imagepath2;
        $images->imageable_id = $car->id;
        $images->imageable_type = 'App\Models\Car';
        $images->save();

        DB::commit();
      }
    }
  }



  public function update($request, $car)
  {

  
    $imgPath = $car->img;
    if ($request->hasFile('img')) {
      Storage::delete($imgPath);
      $imgPath = Storage::putFile('cars', $request->img);
    }

    $car->update([
      'img' => $imgPath,

      'name' => [
        'ar' => $request->name_ar,
        'en' => $request->name_en
      ],

      'desc' => [
        'ar' => $request->desc_ar,
        'en' => $request->desc_en
      ],

      'color' => [
        'ar' => $request->color_ar,
        'en' => $request->color_en
      ],


      'type' => [
        'ar' => $request->type_ar,
        'en' => $request->type_en
      ],


      'seats' => [
        'ar' => $request->seats_ar,
        'en' => $request->seats_en
      ],

      'price' => $request->price,
      'cat_id' => $request->cat_id,
      'brand_id' => $request->brand_id,
      'model_car_id' => $request->model_id,
    ]);

  /*   $images = Image::where('imageable_id', $car->id)->get();


    if ($request->hasFile('imgs')) {
            foreach ($images as $photo) {
              $imgPath2 = $photo->filename;
              Storage::delete($imgPath2); 
            }

            foreach ($request->file('imgs') as $file) {
              $imagepath2 = Storage::putFile('cars', $file);
      
              $images = new Image();
              $images->filename = $imagepath2;
              $images->imageable_id = $car->id;
              $images->imageable_type = 'App\Models\Car';
              $images->save();
      


         
          }


        } */
  }



  public function delete($brand)
  {

    $brand->delete();
  }
}

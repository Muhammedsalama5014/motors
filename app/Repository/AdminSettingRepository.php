<?php

namespace App\Repository ;


use App\Models\User;



use App\Models\Image;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use App\Interface\AdminSettingInterface;

class AdminSettingRepository implements AdminSettingInterface{
    
    public function store($request){
/*         
        User::create([
              'name' => $request->name,
              'email' => $request->email,
              'type' => 'admin',
              'password' => Hash::make($request->password),
           
        ]); */


        
    }



    public function update($request,$admin){
    

         $admin->update([
          'name' => $request->name,
          'email' => $request->email,
          'type' => 'admin',
          'password' => Hash::make($request->password),

        ]); 

        $img = Image::where('imageable_id',Auth::id())->first();
          if($img){
           $imgpath = $img->filename;
          
        
             Storage::delete($imgpath);
             $imgPath = Storage::putFile('admin', $request->img);
            
      
            $img->update([
              'filename'=>$imgPath,
              'imageable_id'=>Auth::id(),
              'imageable_type'=>'App\Models\User',
    ]);
    DB::commit();

          }else{
            $imagepath2 = Storage::putFile('admin', $request->file('img'));
  
            $images = new Image();
            $images->filename = $imagepath2;
            $images->imageable_id = Auth::id();
            $images->imageable_type = 'App\Models\User';
            $images->save();
          
            DB::commit();
          }
       

        
    }
    public function delete($user){
        
      $user->delete(); 
    }
}
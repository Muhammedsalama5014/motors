<?php

namespace App\Repository ;

use App\Interface\AdminCrudInterface;
use App\Models\User;



use Illuminate\Support\Facades\Hash;
use App\Interface\AdminSettingInterface;

class AdminCrudRepository implements AdminCrudInterface{
    
    public function store($request){
        
        User::create([
              'name' => $request->name,
              'email' => $request->email,
              'type' => 'admin',
              'password' => Hash::make($request->password),
           
        ]);


        
    }



    public function update($request,$admin){
         $admin->update([
          'name' => $request->name,
          'email' => $request->email,
          'type' => 'admin',
          'password' => Hash::make($request->password),
        ]); 
        
    }
    public function delete($user){
        
      $user->delete(); 
    }
}
<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use App\Trait\QueryTrait;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\AdminRequest;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Interface\AdminSettingInterface;

class AdminSettingController extends Controller
{
    use QueryTrait ;
    public  $adminSettingInterface ;
     public function __construct(AdminSettingInterface $adminSettingInterface)
     {
         return $this->adminSettingInterface =$adminSettingInterface ;  
        
     }
 
     public function index()
     {
        $admin = $this->getDataById(new User(),Auth::id());
      

      
 
         return view('admin.setting') ->with(compact('admin'));
     }
 
   

 

    
    public function update(Request $request, $id)
    {
    

    DB::beginTransaction();

        try{
         //   $validated = $request->validated();
            $admin = $this->getDataById(new User(),Auth::id());
         
         $this->adminSettingInterface->update($request,$admin);
            return back();
           } catch (\Exception $e){
              DB::rollBack();

            return redirect()->back()->withErrors(['error'=>$e->getMessage()]);
           }
    }


   
    public function destroy($id)
    {
        //
    }


    public function delete($id)
    {
       
        try{
           
            $brand = $this->getDataById(new User(),$id);
           
            $this->adminSettingInterface->delete($brand);
            return back();
           } catch (\Exception $e){
            return redirect()->back()->withErrors(['error'=>$e->getMessage()]);
           }
    
    
        
    }
}

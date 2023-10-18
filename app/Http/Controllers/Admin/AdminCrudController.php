<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use App\Trait\QueryTrait;
use Illuminate\Http\Request;
use App\Http\Requests\AdminRequest;
use App\Http\Controllers\Controller;
use App\Interface\AdminCrudInterface;
;

class AdminCrudController extends Controller
 {
        use QueryTrait ;
        public  $adminCrudInterface ;
         public function __construct(AdminCrudInterface $adminCrudInterface)
         {
             return $this->adminCrudInterface =$adminCrudInterface ;  
            
         }
     
         public function index()
         {
            $admins = $this->getDataByWhereText(new User(),'type','admin');
           
     
             return view('admin.admin')->with(compact('admins'));
         }
     
       
       
         public function store(AdminRequest $request)
         {
     
    
         
             try{
                 $validated = $request->validated();
                 $this->adminCrudInterface->store($request);
                 return redirect()->back();
             }catch(\Exception $e){
                 return redirect()->back()->withErrors(['error'=>$e->getMessage()]);
             }
         }
    
        
        public function show($id)
        {
            //
        }
    
        
        public function update(AdminRequest $request, $id)
        {
            try{
                $validated = $request->validated();
                $brand = $this->getDataById(new User(),$id);
                $this->adminCrudInterface->update($request,$brand);
                return back();
               } catch (\Exception $e){
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
               
                $this->adminCrudInterface->delete($brand);
                return back();
               } catch (\Exception $e){
                return redirect()->back()->withErrors(['error'=>$e->getMessage()]);
               }
        
        
            
        }
    }
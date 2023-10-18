<?php

namespace App\Http\Controllers\Admin;

use App\Trait\QueryTrait;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\BrancheRequest;
use App\Interface\BrancheInterface;
use App\Models\Branche;

class BranchesController extends Controller
{
    use QueryTrait ;
    public  $brancheInterface ;
     public function __construct(BrancheInterface $brancheInterface)
     {
         return $this->brancheInterface =$brancheInterface ;  
        
     }
 
     public function index()
     {
         $branches = $this->getAllData(new Branche());
 
         return view('admin.branches')->with(compact('branches'));
     }
 
   
   
     public function store(BrancheRequest $request)
     {
 
         try{
             $validated = $request->validated();
             $this->brancheInterface->store($request);
             return redirect()->back();
         }catch(\Exception $e){
             return redirect()->back()->withErrors(['error'=>$e->getMessage()]);
         }
     }
 
 
 
  
 
     
     public function update(BrancheRequest $request, $id)
     {
         try{
             $validated = $request->validated();
             $branche = $this->getDataById(new Branche(),$id);
             $this->brancheInterface->update($request,$branche);
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
            
             $branche = $this->getDataById(new Branche(),$id);
            
             $this->brancheInterface->delete($branche);
             return back();
            } catch (\Exception $e){
             return redirect()->back()->withErrors(['error'=>$e->getMessage()]);
            }
     
     
         
     }
}

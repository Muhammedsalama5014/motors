<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\CatRequest;
use App\Interface\CrudInterface;
use App\Models\Cat;
use App\Trait\QueryTrait;


class CategoryController extends Controller
{

    use QueryTrait ;
    public $crudInterface ;
    public function __construct(CrudInterface $crudInterface)
    {
       return $this->crudInterface =$crudInterface ;  
    }

    public function index()
    {

        $cats = $this->getAllData(new Cat());
        return view('admin.category')->with(compact('cats'));
    }

 
    public function create()
    {
        //
    }

   
    public function store(CatRequest $request)
    { 

        try{
            $validated = $request->validated();
      
        $this->crudInterface->store($request);
        return back();
       } catch (\Exception $e){
        return redirect()->back()->withErrors(['error'=>$e->getMessage()]);
       }


     return back() ;


    }

  

    
    public function update(CatRequest $request, $id)
    {
        try{
            $validated = $request->validated();
            $cat = $this->getDataById(new Cat(),$id);
            $this->crudInterface->update($request,$cat);
            return back();
           } catch (\Exception $e){
            return redirect()->back()->withErrors(['error'=>$e->getMessage()]);
           }
    
    
         return back() ;
    }

   
    public function delete($id)
    {
       
        try{
           
            $cat = $this->getDataById(new Cat(),$id);
           
            $this->crudInterface->delete($cat);
            return back();
           } catch (\Exception $e){
            return redirect()->back()->withErrors(['error'=>$e->getMessage()]);
           }
    
    
        
    }
}

<?php

namespace App\Http\Controllers\Admin;

use App\Trait\QueryTrait;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\ModelCarRequest;
use App\Interface\ModelCarInterface;
use App\Models\ModelCar;

class ModelCarController extends Controller
{
    use QueryTrait ;
    public $modelCarInterface ;
    public function __construct(ModelCarInterface $modelCarInterface)
    {
       return $this->modelCarInterface =$modelCarInterface ;  
    }

    public function index()
    {

        $models = $this->getAllData(new ModelCar());
        return view('admin.model')->with(compact('models'));
    }

 
    public function create()
    {
        //
    }

   
    public function store(ModelCarRequest $request)
    { 

        try{
            $validated = $request->validated();
      
        $this->modelCarInterface->store($request);
        return back();
       } catch (\Exception $e){
        return redirect()->back()->withErrors(['error'=>$e->getMessage()]);
       }


     return back() ;


    }

  

    
    public function update(ModelCarRequest $request, $id)
    {
        try{
            $validated = $request->validated();
            $model = $this->getDataById(new ModelCar(),$id);
            $this->modelCarInterface->update($request,$model);
            return back();
           } catch (\Exception $e){
            return redirect()->back()->withErrors(['error'=>$e->getMessage()]);
           }
    
    
         return back() ;
    }

   
    public function delete($id)
    {
       
        try{
           
            $model = $this->getDataById(new ModelCar(),$id);
           
            $this->modelCarInterface->delete($model);
            return back();
           } catch (\Exception $e){
            return redirect()->back()->withErrors(['error'=>$e->getMessage()]);
           }
    
    
        
    }
}

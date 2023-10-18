<?php

namespace App\Http\Controllers\Admin;

use App\Models\Car;
use App\Models\Cat;
use App\Models\Brand;
use App\Models\ModelCar;
use App\Trait\QueryTrait;
use Illuminate\Http\Request;
use App\Interface\CarInterface;
use App\Http\Requests\CarRequest;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class CarController extends Controller
{
    use QueryTrait ;
    public $carInterface ;
    public function __construct(CarInterface $carInterface)
    {
       return $this->carInterface =$carInterface ;  
    }

    public function index()
    {

        $cars = $this->getAllData(new Car());
    
        $models = $this->getAllData(new ModelCar());
        $cats = $this->getAllData(new Cat());
        $brands = $this->getAllData(new Brand());
       
        return view('admin.cars')->with(compact('cars','models','cats','brands'));
    }



   
    public function store(Request $request)
    { 

        DB::beginTransaction();


        try{
            //$validated = $request->validated();
      
        $this->carInterface->store($request);
        return back();
       } catch (\Exception $e){
        DB::rollBack();
        return redirect()->back()->withErrors(['error'=>$e->getMessage()]);
       }


     return back() ;


    }

  

    
    public function update(Request $request, $id)
    {

     
        

        try{
           // $validated = $request->validated();
            $car = $this->getDataById(new Car(),$id);
        
           $this->carInterface->update($request,$car);
            return back();
           } catch (\Exception $e){
  
            return redirect()->back()->withErrors(['error'=>$e->getMessage()]);
           }
    
    
         return back() ;
    }

   
    public function delete($id)
    {
       
        try{
           
            $model = $this->getDataById(new Car(),$id);
           
            $this->carInterface->delete($model);
            return back();
           } catch (\Exception $e){
            return redirect()->back()->withErrors(['error'=>$e->getMessage()]);
           }
    
    
        
    }
}

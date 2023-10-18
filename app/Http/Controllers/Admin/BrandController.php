<?php

namespace App\Http\Controllers\Admin;

use App\Trait\QueryTrait;


use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\BrandRequest;
use App\Interface\BrandInterface;
use App\Interface\CrudInterface;
use App\Models\Brand;

class BrandController extends Controller
{
    use QueryTrait ;
   public  $brandInterface ;
    public function __construct(BrandInterface $brandInterface)
    {
        return $this->brandInterface =$brandInterface ;  
       
    }

    public function index()
    {
        $brands = $this->getAllData(new Brand());

        return view('admin.brands')->with(compact('brands'));
    }

  
  
    public function store(BrandRequest $request)
    {

        try{
            $validated = $request->validated();
            $this->brandInterface->store($request);
            return redirect()->back();
        }catch(\Exception $e){
            return redirect()->back()->withErrors(['error'=>$e->getMessage()]);
        }
    }



 

    
    public function update(BrandRequest $request, $id)
    {
        try{
            $validated = $request->validated();
            $brand = $this->getDataById(new Brand(),$id);
            $this->brandInterface->update($request,$brand);
            return back();
           } catch (\Exception $e){
            return redirect()->back()->withErrors(['error'=>$e->getMessage()]);
           }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }






    public function delete($id)
    {
       
        try{
           
            $brand = $this->getDataById(new Brand(),$id);
           
            $this->brandInterface->delete($brand);
            return back();
           } catch (\Exception $e){
            return redirect()->back()->withErrors(['error'=>$e->getMessage()]);
           }
    
    
        
    }


}

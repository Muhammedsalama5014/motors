<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Car;
use App\Models\Order;
use App\Trait\QueryTrait;
use Illuminate\Http\Request;

class RequesrtedCarController extends Controller
{
    use QueryTrait;
    public function index(){
        $orders = $this->getAllData(  new Order());
        return view('admin.requested-cars')->with(compact('orders'));

    }

   public function carDetails($id){
    $car = $this->getDataById(new Car(),$id);

    return view('pages.car-details')->with(compact('car')) ;
   }

   public function cancelRequest($id){
    $order = $this->getDataById(new Order(),$id);
    $order->delete();
    return back();
   }


   public function oldRequested(){

    $orders = Order::onlyTrashed()->get();


    return view('admin.history')->with(compact('orders')) ;
   }


}

<?php

namespace App\Http\Livewire;

use Carbon\Carbon;
use App\Models\Car;
use App\Models\Order;
use Livewire\Component;
use App\Models\Bigdiscount;
use App\Models\Discount;
use App\Models\Personalinformation;
use Illuminate\Support\Facades\Route;

class Reserve extends Component
{
    public $currentStep = 1;
    public $ID_Number,$ID_Name,$Birthday,$Expiry_Date,$Job,
    $Work_Address,$Home_Address;


    public  $branch,$place,$Address;

    public  $card_name,$card_number,$exp,$cvcpwd;
    
  
    public $car;


    public function mount()
    
    {
    
        $car = Route::current()->parameter('id');
        $this->car = $car;
    } 







        
   public function updated($propertyName)
    {
        $this->validateOnly($propertyName, [
           
             'ID_Number' => 'required',
            'Birthday' => 'required',
            'ID_Name' => 'required',
            'Job' => 'required',
            'Expiry_Date' => 'required',
            'Home_Address' => 'required',
            'Work_Address' => 'required',

            'card_name' => 'required',
            'card_number' => 'required',
            'exp' => 'required',
            'cvcpwd' => 'required', 
          
            'branch' => 'required',
            'place' => 'required',
            'Address' => 'required', 

             'card_name' => 'required',
            'card_number' => 'required',
            'exp' => 'required',
            'cvcpwd' => 'required', 
            
            
           

        ]);
    } 

 
    public function firstSubmit(){
      /*    $validatedData = $this->validate([
            'ID_Number' => 'required',
            'Birthday' => 'required',
            'ID_Name' => 'required',
            'Job' => 'required',
            'Expiry_Date' => 'required',
            'Home_Address' => 'required',
            'Work_Address' => 'required',
        ]);  
 */
$big_discount = Bigdiscount::all();
$car = Car::where('id',intval($this->car))->first();

$discount = Discount::where('car_id',intval($this->car))->first();
$price =$car->price;     
$name = $car->name ;   
if($discount ){
    $discount_number = $discount->discount_number;
    if($discount->discount_number !=0){
       
        $price = $discount->car->price - ($discount->discount_value / 100) * $discount->car->price ;
        $discount->update([
            'discount_number'=>  --$discount_number ,
        ]);
    }else{
        
        if($discount->discount_number !=0){
        $price = $discount->car->price - $discount->discount_value ;
        $discount->update([
            'discount_number'=>  --$discount_number ,
        ]);
    }
    }
}
 


foreach($big_discount as $dis){
    $car = Car::where('id',intval($this->car))->first();
 
 
    $price = $car->price;
    $discount_number = $dis->discount_number;
  
   
    if(($car->cat_id == $dis->cat_id || $car->model_car_id == $dis->model_car_id ||$car->brand_id == $dis->brand_id ) && $dis->discount_type =='precent' ){
        if($dis->discount_number !=0){
            $price = $car->price - ($dis->discount_value / 100) * $car->price ;
            $dis->update([
                'discount_number'=>  --$discount_number ,
            ]);
        }
      
      
    }else{
        
        if($dis->discount_number !=0){
        $price = $car->price - $dis->discount_value ;
        $dis->update([
            'discount_number'=>  --$discount_number ,
        ]);
    }
    }

   

}


     

  
      $expire_date = $this->Expiry_Date;
      $current_date =now();
      $time1=strtotime($expire_date);
      $time2=strtotime($current_date);
      $time=$time1 - $time2;
     $days= date('d', $time);

       


      $order =  Order::create([
            'user_id'=>1,
            'name'=>$car->name,
            'price'=>$price,
            'start_date'=>now(),
            'exp_date'=>$this->Expiry_Date,
            'total_price'=>$price * $days,
            'number_days'=>$days,
        ]);

        $order->cars()->attach($car->id);


        $this->currentStep=2;

       
    }

    public function secondSubmit(){
       $validatedData = $this->validate([
            'branch' => 'required',
            'place' => 'required',
            'Address' => 'required',
        ]); 
        $this->currentStep=3;
   
    }
    public function thirdSubmit(){
       $validatedData = $this->validate([
            'card_name' => 'required',
            'card_number' => 'required',
            'exp' => 'required',
            'cvcpwd' => 'required', 
        ]); 
        
       $this->currentStep=4;
     
    }


    public function submitForm(){
      
        Personalinformation::create([
            'ID_Number' => $this->ID_Number,
            'Birthday' => $this->Birthday,
            'ID_Name' => $this->ID_Name,
            'Job' => $this->Job,
            'Expiry_Date' => $this->Expiry_Date,
            'Home_Address' => $this->Home_Address,
            'Work_Address' => $this->Work_Address,

          
          
            'branch' => $this->branch,
            'place' => $this->place,
            'Address' => $this->Address, 

             'card_name' => $this->card_name,
            'card_number' => $this->card_number,
            'exp' => $this->exp,
            'cvcpwd' => $this->cvcpwd, 
            'user_id' => 1, 
        ]);
       $this->currentStep=5;
     
    }

    
    public function render()
    { $car = Car::where('id',intval($this->car))->first();
        return view('livewire.reserve',[
            'car'=> $car
        ]);
    }
}

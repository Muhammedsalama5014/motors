<?php

namespace App\Http\Controllers\User;

use App\Models\User;
use App\Models\Image;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Models\Contact;
use App\Models\Personalinformation;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use League\CommonMark\Node\Query\OrExpr;

class DashboarUserController extends Controller
{
 public function index(){
    $user = User::where('id',Auth::id())->first();
  /*   if($user->type == 'admin'){

   return view('welcome')->with(compact('user'));

    } */
   return view('user.index')->with(compact('user'));


 }


    public function request_car(){

        $user = User::where('id',Auth::id())->where('type','admin')->first();

        $orders = Order::where('user_id',$user->id)->get();

        return view('user.requested-cars')->with(compact('orders'));


    }

    public function cancelrquest_user($id){
        $order = $this->getDataById(new Order(),$id);
        $order->delete();
        return back();
       }



       public function oldRequested(){

        $user = User::where('id',Auth::id())->first();


          $orders = Order::onlyTrashed()->where('user_id',Auth::id())->get();


        return view('user.history')->with(compact('orders')) ;
       }


       public function userSetting(){

        $user = User::where('id',Auth::id())->first();

        return view('user.setting')->with(compact('user')) ;


       }


       public function userSettingUpdate(Request $request){




        DB::beginTransaction();

        try{
          $user = User::where('id',Auth::id())->first();



     $user->update([
          'name' => $request->name,
          'email' => $request->email,
          'type' => 'client',
          'password' => Hash::make($request->password),

        ]);


        $img = Image::where('imageable_id',Auth::id())->first();
          if($img){
           $imgpath = $img->filename;


             Storage::delete($imgpath);
             $imgPath = Storage::putFile('client', $request->img);


            $img->update([
              'filename'=>$imgPath,
              'imageable_id'=>Auth::id(),
              'imageable_type'=>'App\Models\User',
    ]);
    DB::commit();

          }else{
            $imagepath2 = Storage::putFile('client', $request->file('img'));

            $images = new Image();
            $images->filename = $imagepath2;
            $images->imageable_id = Auth::id();
            $images->imageable_type = 'App\Models\User';
            $images->save();

            DB::commit();
          }






            return back();
           } catch (\Exception $e){
              DB::rollBack();

            return redirect()->back()->withErrors(['error'=>$e->getMessage()]);
           }













   }


      public function userGeneralInformationUpdate(Request $request){


            try{

              $user = Personalinformation::where('id',Auth::id())->first();
              if( $user){
                $user->update([
                  'Work_Address' => $request->work_address,

                  'Home_Address' => $request->home_address,
                  'Job' => $request->job,
                  'ID_Number' => $request->id_number,
                  'ID_Name' => $request->id_name,
                  'Birthday' => $request->birth_day,
                  'Expiry_Date' => $request->License_expiry_date,



            ]);
            return back();

              }else{
                Personalinformation::create([
                  'Work_Address' => $request->work_address,
                  'user_id' =>Auth::id(),


                  'Home_Address' => $request->home_address,
                  'Job' => $request->job,
                  'ID_Number' => $request->id_number,
                  'ID_Name' => $request->id_name,
                  'Birthday' => $request->birth_day,
                  'Expiry_Date' => $request->License_expiry_date,
                ]);
                return back();


              }


/*

    $table->text('ID_Number')->nullable();
            $table->text('ID_Name')->nullable();
            $table->text('Birthday')->nullable();
            $table->text('Expiry_Date')->nullable();
            $table->text('Work_Address')->nullable();
            $table->text('Home_Address')->nullable();
            $table->text('Job')->nullable();


*/





          } catch (\Exception $e){


          return redirect()->back()->withErrors(['error'=>$e->getMessage()]);
        }


    }



}

<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class SiteUserContrller extends Controller
{
        public function index(){

    }
    public function edit($id){
        $data['user'] = User::findOrFail($id);
        return view('web.account-setting')->with($data);
    }
    public function update(Request $request, $id)
    {
        try{

            $user = User::find($id);
            $email = $user->email ;
            $password = $user->password;
            if($request->has('email')){
                $email = $request->email;
            }
            if($request->has('password')){

              $validator = Validator::make($request->all(), [
                  'password' => 'required|min:8|confirmed'
              ]);

               if ($validator->fails()) {
                   Session::flash('error', $validator->messages()->first());
                   return redirect()->back()->withInput();
               }

                $password = Hash::make($request->password);


            }
            $user->update([
                'email' => $email,
                'password' => $password
            ]);
            return back();
        } catch (\Exception $e){
            return redirect()->back()->withErrors(['error'=>$e->getMessage()]);
        }
    }

}

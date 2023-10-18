<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SettingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $data['setting'] = Setting::findOrFail(1);
        return view('web.contact')->with($data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id = 1)
    {
        $data['setting'] = About::findOrFail($id);
        return view('admin.setting')->with($data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        try{

            $setting = Setting::find($id);
            $setting->update([
                'email'=>$request->email,
                'phone'=>$request->phone,
                'mobile'=>$request->mobile,
                'address1'=>$request->address1,
                'address2'=>$request->address2,
                'open'=>$request->open,
                'map'=>$request->map,


            ]);
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
}

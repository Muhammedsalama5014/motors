<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\About;

class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function show($id = 1)
    {
        $data['about'] = About::findOrFail($id);
        return view('web.about')->with($data);
    }
    
    public function privacy()
    {
        return view('web.privacy');
    }


}

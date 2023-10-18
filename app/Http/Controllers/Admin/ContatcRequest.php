<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContatcRequest extends Controller
{

    public function contact(){


        $msgs = Contact::all();
        return view('admin.contacts')->with(compact('msgs'));
    }
}

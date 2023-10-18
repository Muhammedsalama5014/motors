<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\About;
use Illuminate\Support\Facades\Storage;

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
    public function edit($id = 1)
    {
        $data['about'] = About::findOrFail($id);
        return view('admin.about')->with($data);
    }

    public function update(Request $request, $id = 1)
    {
        try{

            $about = About::find($id);
            $imgPath = $about->img;
            if ($request->hasFile('img')) {
                Storage::delete($imgPath);
                $imgPath = Storage::putFile('cars', $request->img);
            }

            $about->update([
                'title_head'=>[
                    'ar' => $request->title_head_ar,
                    'en' => $request->title_head_en
                ],
                'desc_head'=>[
                    'ar' => $request->desc_head_ar,
                    'en' => $request->desc_head_en
                ],
                'title_bottom'=>[
                    'ar' => $request->title_bottom_ar,
                    'en' => $request->title_bottom_en
                ],
                'desc_bottom'=>[
                    'ar' => $request->desc_bottom_ar,
                    'en' => $request->desc_bottom_en
                ],
                'img'=> $imgPath,

            ]);
            return back();
        } catch (\Exception $e){
            return redirect()->back()->withErrors(['error'=>$e->getMessage()]);
        }

    }

}

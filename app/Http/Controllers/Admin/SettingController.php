<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Setting;
use Session;
use Auth;
use Hash;
use validate;
use DB;

class SettingController extends Controller

{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $setting= DB::table('settings')->first();
        return view('pages.settings',compact('setting'));
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
        $request->validate([
            'name'=>'required',
            'email'=>'required',
            'image'=>'nullable|image|mimes::jpeg,png,jpg,gif,svg|max:2048',
            'number'=>'nullable',
            'facebook'=>'nullable',
            'instagram'=>'nullable',
            'youtube'=>'nullable',
            'linkedin'=>'nullable',
            'desription'=>'nullable',
            'copyright'=>'nullable',
        ]);
        $setting = Setting::firstOrNew(['id'=>$request->id]);
        $setting->name=$request->name;
        $setting->email=$request->email;
        $setting->number=$request->number;
        $setting->facebook=$request->facebook;
        $setting->instagram=$request->instagram;
        $setting->youtube=$request->youtube;
        $setting->linkedin=$request->linkedin;
        $setting->desription=$request->desription;
        $setting->copyright=$request->copyright;
        $setting->save();

        if($request->hasFile('image')){
            $file = $request->file('image');
            $image_name = time() . '.' . $file->extension();
            $file->move(public_path('images'),$image_name);
            $setting->image=$image_name;
            $setting->save();
        }
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\setting  $setting
     * @return \Illuminate\Http\Response
     */
    public function show(setting $setting)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\setting  $setting
     * @return \Illuminate\Http\Response
     */
    public function edit(setting $setting)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\setting  $setting
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, setting $setting)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\setting  $setting
     * @return \Illuminate\Http\Response
     */
    public function destroy(setting $setting)
    {
        //
    }
}

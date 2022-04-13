<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;

use App\Models\Services;



class AdminController extends Controller
{
    public function user()
    {
        $data= user::all();
        return view("admin.users", compact("data"));
    }
    
    public function deleteuser($id)
    {
        $data= user::find($id);
        $data->delete();
        return redirect()->back();
    }
    
    public function servicesmenu()
    {
        return view("admin.servicesmenu");
    }
    
    public function upload(Request $request)
    {
        $data = new services;

        $image=$request->image;

        $imagename =time().'.'.$image->getClientOriginalExtension();

        $request->image->move('servicesimage', $imagename);

        $data->image=$imagename;

        $data->title=$request->title;
        $data->price=$request->price;
        $data->description=$request->description;

        $data->save();

        return redirect()->back();
    }
}

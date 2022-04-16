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
    
    public function deleteservices($id)
    {
        $data= services::find($id); 
        $data->delete();
        return redirect()->back();
    }
    public function updateview($id)
    {
        $data= services::find($id);  
        return view('admin.updateview', compact("data"));
    }
    public function update(Request $request, $id)
    {
        $data= services::find($id);  

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
    
    public function servicesmenu()
    {
        $data= services::all();
        return view("admin.servicesmenu", compact("data"));
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

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Food;
use App\Models\Reservation;
use App\Models\Chef;


class AdminController extends Controller
{
    public function user(){
        $data= user::all();
        return view("admin.users",compact("data"));
    }
    public function deleteuser($id){
        $data = user::find($id);
        $data->delete();  
        return redirect()->back();
           
    }
    public function foods(){
        $data = food::all();
        return view ("admin.foodmenu", compact('data'));
    }
    public function upload(Request $request){
        $data = new food;
        $image = $request->image;
        $imageName =time().' . '.$image->getClientOriginalExtension();
        $request->image->move('foodimages', $imageName);
        $data->image = $imageName;
        $data->title = $request->title;
        $data->price = $request->price;
        $data->description = $request->description;
        $data->save();
        return redirect()->back();

    }
    public function menu($id){
        $data = food::find($id);
        $data->delete();  
        return redirect()->back();
        
    }
    public function updateview($id){
        $data = food::find($id);
        return view("admin.update",compact('data'));
    }
    public function update(Request $request,$id){
        $data = food::find($id);
        $image = $request->image;
        $imageName =time().' . '.$image->getClientOriginalExtension();
        $request->image->move('foodimages', $imageName);
        $data->image = $imageName;
        $data->title = $request->title;
        $data->price = $request->price;
        $data->description = $request->description;
        $data->save();
        return redirect()->back();
    }
    public function reservation(Request $request){
        $data = new reservation;
        $data->name = $request->name;
        $data->email = $request->email;
        $data->phone = $request->phone;
        $data->guest = $request->guest;
        $data->date = $request->date;
        $data->time = $request->time;
        $data->message = $request->message;
        $data->save();
        return redirect()->back();

    }
    public function viewreservation(){
        $data = reservation::all();
        return view("admin.adminreservation", compact("data"));
    }
    public function viewfoodchefs(){
          $data = chef::all();
        return view("admin.adminfoodchef",compact('data'));
    }

    public function foodchef(Request $request){
        $data = new chef;
        $image = $request->image;
        $imageName =time().' . '.$image->getClientOriginalExtension();
        $request->image->move('chefimage', $imageName);
        $data->image = $imageName;
        $data->name = $request->name;
        $data->speciality = $request->speciality;
        $data->save();
        return redirect()->back();
    }
    public function chefdelete($id){
        $data = chef::find($id);
        $data->delete();  
        return redirect()->back();
    }
    public function chefview($id){
        $data = chef::find($id);
        return view("admin.updatechef",compact('data'));
    }
    public function updatechef(Request $request, $id){
        $data = chef::find($id);
        $image = $request->image;
        $imageName =time().' . '.$image->getClientOriginalExtension();
        $request->image->move('chefimage', $imageName);
        $data->image = $imageName;
        $data->name = $request->name;
        $data->speciality = $request->speciality;
        $data->save();
        return redirect()->back();
    }
   
    
}


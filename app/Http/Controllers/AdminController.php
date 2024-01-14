<?php

namespace App\Http\Controllers;

use App\Models\Doctor;
use Illuminate\Http\Request;

class AdminController extends Controller
{


    public function addview()
    {
        return view('admin.add_doctor');
    }

    //post function
    public function uploaddoctor(Request $request){
        $doctor = new Doctor;
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imagename = time() . '.' . $image->getClientOriginalExtension();  
            $image->move('doctorimage', $imagename);
            $doctor->image = $imagename;
        } else {
            // Handle the case where no file is provided.
            // You might want to return an error response or set a default image.
        }
    
//$doctor is model, center name is a column in table,  request name from the form.
        $doctor->name=$request->name;
        $doctor->phone=$request->phone;
        $doctor->specialization=$request->specialization;
        $doctor->room_number=$request->room_number;

        $doctor->save();

        return redirect()->back()->with('message','Doctor Saved Successully');

    }
}

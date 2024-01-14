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
        $doctor = new doctor;
        $image  = $request->image;
        $imagename= time().'.'.$image->getClientoriginalExtenstion();  
        $request->file->move('doctorimage',$imagename);
        $doctor->image=$imagename;

//$doctor is model, center name is a column in table,  request name from the form.
        $doctor->name=$request->name;
        $doctor->phone=$request->phone;
        $doctor->specialization=$request->specialization;
        $doctor->room_number=$request->room_number;

    }
}

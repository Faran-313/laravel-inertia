<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MaritalStatus;

class StatusController extends Controller
{
    public function status()
    {
        return view('maritalstatus');
    }

    public function maritalStatusStore(Request $request)
    {

        $request->validate([
            'name' => 'required',
            'gender' => 'required',
            'date_of_birth' => 'required'
        ]);
//        print_r($request->all());die();
//        dd($request->all());
        $maritalStatusData = MaritalStatus::create($request->all());

        $dob =$request['date_of_birth'];
        $gender = $request['gender'];
        $name = $request['name'];

//        $year = (date('Y') - date('Y',strtotime($dob)));
//        dd($gender);
        if($gender == 'Male' || $gender == 'Female')
        {
          echo 'eligible';
        }
    }
}

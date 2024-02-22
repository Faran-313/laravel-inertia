<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalculatorController extends Controller
{
    public function showCalculator()
    {
        return view('calculator');
    }

    public function saveCalculator(Request $request)
    {


        dd($request->one);
//        if (isset($request['selectchar'])) {
//             $a = $request['selectchar'];
//             return $a;
//        }
        //return $current_txt;
//        if (isset($_POST['selectchar'])) {
//            $current_txt .= $_POST['selectchar'];
//        }
//        if (isset($_POST['clear'])) {
//            $current_txt = "";
//        }
//        if (isset($_POST['calculate'])) {
//            $current_txt .= " = " . eval('return ' . $current_txt . ';');
//        }
    }

//        public function palindrome()
//        {
//            $number = '45654';
//            $strLength = strlen($number);
//            for ($i = $strLength-1; $i++){
//
//            }
//        }
}

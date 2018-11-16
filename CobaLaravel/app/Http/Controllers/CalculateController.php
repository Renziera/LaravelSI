<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalculateController extends Controller
{
    public function index(){
        return view('calculate');
    }

    public function sum(Request $request){
        $angka1 = $request->angka1;
        $angka2 = $request->angka2;
        $result = $angka1 + $angka2;
        return view('calculate_post')->with(compact('result'));
    }
}

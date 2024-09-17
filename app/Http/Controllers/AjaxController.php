<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class AjaxController extends Controller
{
    public function twoView (){
        return view('second');
    }
    public function index(){
        return view('welcome');
    }
    public function getdata(){
        $dataa = DB::table('info')->get();
        // dd($data);

        return response()->json(['success' => true, 'message' => $dataa]);
    }
}

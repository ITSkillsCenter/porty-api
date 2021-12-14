<?php

namespace App\Http\Controllers;

use App\Models\service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    //
    public function services(Request $request)
    {
        if($request->isMethod('POST')){
                $request->validate([
                    "title"=>"required",
                    "description"=>"required",
                    // "icon"=>"required",


                ]);

             $create = service::create($request->all());
             if($create){
                 return response()->json(['msg'=>'Services saved successfully']);
             }

        }


    }

    public function welcome()
    {

        return view('welcome');
    }
}

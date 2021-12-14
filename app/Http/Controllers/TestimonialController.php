<?php

namespace App\Http\Controllers;

use App\Models\TestimonialModel;
use Illuminate\Http\Request;

class TestimonialController extends Controller
{
    //
    public function testimonialapi(Request $request){

        $request = TestimonialModel::paginate(6);
       
        return response()->json($request);
    }


}

<?php

namespace App\Http\Controllers;

use App\Models\CatalogueModel;
use Illuminate\Http\Request;

class CatalogueController extends Controller
{
    //

    public function catalogueapi(Request $request){

        $request = CatalogueModel::paginate(6);
       
        return response()->json($request);
    }

}

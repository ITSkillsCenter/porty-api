<?php

namespace App\Http\Controllers;

use App\Models\Contactmodel;
use App\Models\Subscriptionmodel;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function contactform(Request $req){
        
        if ($req->isMethod('post')) {
            $req->validate([
                'name' => 'required',
                'email' => 'required|email',
                'subject' => 'required',
                'message' => 'required',
            ]);




            $user = new Contactmodel();
            $user->name = $req->name;
            $user->email = $req->email;
            $user->subject = $req->subject;
            $user->message = $req->message;
            $user->save();
        }
    }



    public function Subscriptionform(Request $req){
        
        if ($req->isMethod('post')) {
            $req->validate([
                'email' => 'required'
            ]);



            $subscription = new Subscriptionmodel();
            $subscription->email = $req->email;
            $subscription->save();

        }
    }


    public function getter(){
        $user = Contactmodel::all();
        return response()->json($user);
    }


}

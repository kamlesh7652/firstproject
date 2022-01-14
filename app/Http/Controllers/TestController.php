<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Contact;
use Illuminate\Http\Request;

class TestController extends Controller
{
    function index()
    {
        // $user=Contact::with('user')->first();
        // return $user;
        $user=User::with(['contact','posts'])->find(1);
        return $user->toArray();
    }
    //Post api create here
    function store(Request $request)
    {
        $contact= new Contact;
        $contact->address=$request->address;
        $contact->phoneno=$request->phoneno;
        $contact->user_id=$request->user_id;
        $contact->save();
        return $contact;

    }
    //get api show here
    function show()
    {
        $getdata=Contact::all();
        return $getdata;
    }
     //edit api update here

     function edit(Request $request)
     {
        //  $update=Contact::find($request->id);
        //  $update->address=$request->address;
        //  $update->phoneno=$request->phoneno;
        //  $update->user_id=$request->user_id;
        //  $update->save();
         return ['updated'=>'data has been update'];
     }
}

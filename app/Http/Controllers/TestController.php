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
}

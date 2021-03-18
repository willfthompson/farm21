<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\User;
use Validator;

class ProfileController extends Controller
{
   
    public function show(User $user)
    {  
       return response()->json($user);
    }
}
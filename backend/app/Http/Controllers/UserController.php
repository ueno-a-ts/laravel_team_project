<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{

    public function adminIndex(){
       $users = User::latest()->get();
       return view('admin.users.index', compact('users'));
   }

}

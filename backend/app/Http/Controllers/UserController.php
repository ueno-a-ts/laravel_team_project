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

   public function adminDestroy(User $user){
    $user = User::whereIn('id', $user)->delete();
    return redirect('/admin/users');
   }

}

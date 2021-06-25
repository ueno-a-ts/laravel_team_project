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

    public function adminUpdate(Request $request){
        $admin_check = $request->input('admin_check') === "1" ? 1 : 0;
        $user = $request->input('user_id');
        User::where('id', $user)
            ->update(['admin_check' => $admin_check]);
        return redirect('/admin/users');
    }

   public function adminDestroy(User $user){
    $user = User::whereIn('id', $user)->delete();
    return redirect('/admin/users');
   }

}

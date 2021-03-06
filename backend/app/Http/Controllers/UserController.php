<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{

    public function adminIndex(){
       $users = User::latest()->get();

       if(Auth::user()->admin_check){
            return view('admin.users.index', compact('users'));
        }else{
            return redirect('/top');
        }
    }

    public function adminUpdate(Request $request){
        $admin_check = $request->input('admin_check') === "1" ? 1 : 0;
        $user = $request->input('user_id');
        User::where('id', $user)
            ->update(['admin_check' => $admin_check]);
        return redirect('/admin/users');
    }

   public function adminDestroy(User $user){
    $user = User::find($user->id)->delete();
    return redirect('/admin/users');
   }


    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(User $user)
    {
        return User::create([
            'name' => 'name',
            'email' => 'email',
            'address' =>'address',
            'password' => Hash::make($data['password'])
        ]);
    }

    protected function userEdit(User $user){

        return view('user.edit', compact('user'));
    }

    public function userUpdate(Request $request,User $user){
        $user->update(
            [
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'address' =>$request->input('address'),
            'password' => Hash::make($request->input('name'))
            ]);
        return redirect()->route('home');
    }
}

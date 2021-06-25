<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Hash;

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


        protected function showEdit(User $user){

    return view('edit', compact('user'));
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

    public function exeUpdate(
        Request $request,
        User $user
    ){
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

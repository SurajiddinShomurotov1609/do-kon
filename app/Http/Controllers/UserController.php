<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function user(){
        $user = User::all();
        return view('admin.index',['user'=>$user]);
    }

    public function userEdit($id){
        $user = User::find($id);
        return view('admin.edit',['user'=>$user]);
    }

    public function userUpdate(Request $request, $id){
        $user = User::find($id);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->save();
        return redirect()->route('user');
    }
}

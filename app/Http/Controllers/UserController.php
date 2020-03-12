<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\Redirect;


class UserController extends Controller
{
    public function index()
    {   
        $users = User::orderBy('created_at','desc')->paginate(10);

        return view("pages.users", [
            'users' => $users,
        ]);
    }

    public function store(Request $request)
    {

        $validator = Validator::make($request->all(),[
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:8',
            'birth_date' => 'required|date',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $user = new User();
        $name = $request->input('first_name')." ".$request->input('last_name');
        $user->name = $name;
        $user->email = $request->input('email');
        $user->password = $request->input('password');
        $user->birthDate = $request->input('birth_date');
        $user->gender = $request->input('gender');
        $user->save();

        return redirect('users');
    }
}

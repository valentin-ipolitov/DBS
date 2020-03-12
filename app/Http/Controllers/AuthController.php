<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\Redirect;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function login(Request $request) {

        // Validete input data
        $validator = Validator::make($request->all(),[
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        // Get crredentials
        $email = $request->input('email');
        $password = $request->input('password');

        // Getting User password from DB
        $user = User::where('email', $email)->first();

        if ($user === null) {
            $errors = collect([
                "wrong email",   
            ]);

            return redirect()->back()->with('errors', $errors);
        }

        $hashed_password_from_db = $user->password;

        // Correct credentials
        if (Hash::check($password, $hashed_password_from_db))
        {
            session([
                'id' => $user->id,
                'user' => $user
                ]);
            return redirect('/main-page');
        }
        // Wrong credentials
        else {
            $errors = collect([
                "wrong password"   
            ]);

            return redirect()->back()->with('errors', $errors);
        }

    }

    public function logout (Request $request) {
        session()->flush();
        return redirect('/');
    }

    public function registration (Request $request) {
        return view('pages.registration');
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
        $user->password = Hash::make($request->input('password'));
        $user->birthDate = $request->input('birth_date');
        $user->gender = $request->input('gender');
        $user->save();

        return redirect('users');
    }
}

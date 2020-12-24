<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\RegisterRequest;
use App\Http\Requests\LoginRequest;
use App\Models\User;

class AuthController extends Controller
{
    public function getRegistrationForm()
    {
        return view('auth.register');
    }

    public function register(RegisterRequest $request)
    {
        $data = $request->validated();
        $data['password'] = bcrypt($data['password']);
        $data['password'] = \Hash::make($data['password']);
        $user = User::create($data);
        return redirect('/');
    }

    public function getLoginForm()
  {
    return view('auth.login');
  }

  public function login(LoginRequest $request)
  {

      $credentials = $request->validated();
      info($credentials);
    $isSuccessful = auth()->attempt($credentials);
    info($isSuccessful);
    if ($isSuccessful) {
      return redirect('/');
    }
    else {return back()->withErrors([
      'email' => 'Incorrect email or password'
    ]);
    }
  }

  public function logout() {
    auth()->logout();
    return redirect('/login');
  }
}

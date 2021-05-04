<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    use RegistersUsers;

    protected $redirectTo = RouteServiceProvider::HOME;

    public function __construct()
    {
        $this->middleware('guest');
    }

    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            // 'password' => ['required', 'confirmed', Password::min(8)->symboles()->numbers()],
            'user_mobile' => ['required', 'regex:/^(\+\d{1,3}[- ]?)?\d{9}$/ ', 'unique:users'],
            // 'mobile' => ['required', 'regex:/^0+\d{9}$/gm'],
            'user_address' => ['required', 'string', 'max:255'],
        ]);
    }

    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            // 'password' => Hash::make($data['password']),
            'password' => bcrypt($data['password']),
            'user_mobile' => $data['user_mobile'],
            'user_address' => $data['user_address'],
        ]);
    }
}

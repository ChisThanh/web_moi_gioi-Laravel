<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;
use Laravel\Socialite\Facades\Socialite;

class LoginController extends Controller
{


    use AuthenticatesUsers;


    protected $redirectTo = RouteServiceProvider::HOME;

    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
    public function showLoginForm()
    {
        return view('auth.login');
    }

    // Xử lý đăng nhập
    public function login(Request $request)
    {
        // Validate dữ liệu đầu vào
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        // Thực hiện đăng nhập
        $credentials = $request->only('email', 'password');


        if (Auth::attempt($credentials)) {
            $user = Auth::user();
            if (Gate::allows('isAdmin', $user)) {
                return redirect("/admin/dashboard");
            }
            return redirect('/home');
        }

        // Đăng nhập thất bại
        return redirect()->route('login')->with('error', 'Invalid credentials');
    }
    public function logout()
    {
        Auth::logout();
        return redirect('/login');
    }

    public function callback($provider)
    {
        $driver = Socialite::driver($provider)->user();

        $user = User::query()->firstOrCreate([
            'email' => $driver->email,
        ], [
            'name' => $driver->nickname,
            'avatar' => $driver->avatar,
            'role' => 1,
        ]);
        Auth::login($user);
        return redirect()->route('home');
    }
}

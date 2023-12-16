<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class UserController extends Controller {
    public function login(LoginRequest $request) {
        $credentials = $request->getCredentials();

        if (!Auth::attempt($credentials)) {
            return redirect()->route('user.index')
                ->withErrors(trans('auth.failed'));
        }
        $user = Auth::user();
        Auth::login($user);

        return $this->authenticated($request, $user);
    }

    protected function authenticated(Request $request, $user) {
        return redirect('/');
    }

    public function form() {
        return view('user.login');
    }

    public function logout() {
        Session::flush();
        Auth::logout();

        return redirect('/');
    }
}

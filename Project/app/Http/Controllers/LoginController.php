<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    use AuthenticatesUsers;

    public function __construct()
    {
        $this->middleware('guest', ['except' => 'destroy']);
    }
    public function authenticate(Request $request)
    {
        $this->validate($request, [
            'username' => 'required',
            'password' => 'required'
        ],
            [
                'username.required' => 'Vui lòng nhập vào tên tài khoản.',
                'password.required' => 'Vui lòng nhập vào mật khẩu.',
            ]);
        $credentials = $request->only('username', 'password');

        if (Auth::attempt($credentials)) {
            // Authentication passed...
            return redirect('/home');
        } else return back()->with('status_error', 'Thông tin tài khoản không chính xác vui lòng kiểm tra lại');
    }

    public function destroy()
    {
        Auth()->logout();
        return redirect('/login');
    }

}


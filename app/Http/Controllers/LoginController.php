<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Cookie as FacadesCookie;

class LoginController extends Controller
{
    //public function index(){
    //    return view ('login');
    //}

    public function authenticate(Request $request){
        $credentials = $request->validate([
            'username' => 'required',
            'password' => 'required | min:5 | max:50'
        ]);

        if(Auth::attempt($credentials)){
            $request->session()->regenerate();

            if($request->has('remember')){
                FacadesCookie::queue('adminuser', $request->username,1440);
                FacadesCookie::queue('adminpw', $request->password,1440);
            }
            
            return redirect()->intended('/beranda_admin');
        }

        return back()->with('loginError', 'Login Gagal!');

    }

    public function logout(Request $request){
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }

    public function gantiPassword(){
        return view('admin.ubah_pw');
    }

    public function updatePassword(Request $request){
        $request->validate([
            'password_lama' => 'required',
            'password_baru' => 'required'
        ]);

        $user = User::findOrFail(Auth::user()->id);

        if (Hash::check($request->password_lama, $user->password)) {
            $user->password = Hash::make($request->password_baru);
            $user->save();
            return redirect('/ganti_password')->with('success', 'Password berhasil diubah!');
        } else {
            return back()->with('loginError', 'Password lama tidak sesuai!');
        }
    }
}
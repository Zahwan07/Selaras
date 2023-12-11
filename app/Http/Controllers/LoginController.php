<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index()
    {
        return view('/login'); //
    }

    public function valid(Request $request)
    {
        $credentials = $request->only('username', 'password');
        if (Auth::attempt($credentials)) { //melakukan autentifikasi 
            // Authentikasi berhasil dilakukan
            $username = Auth::user()->username;
            $nama_lengkap = Auth::user()->nama_lengkap; //menambahkan variabel $nama_lengkap untuk session menu
            session(['id' => Auth::user()->username]); //buat session untuk menampilkan nama (uname) dimenu
            return redirect('/menu')->with('success', "Selamat datang kembali, $nama_lengkap di SELARAS Administrator!!");
        } else {
            // Authentikasi gagal dilakukan
            return redirect('/login')->with('danger', 'Username atau password yang Anda masukkan salah. Silakan coba lagi.');
        }
    }

    public function logout(Request $request)
{
    // hapus session login
    Auth::logout();

    $request->session()->invalidate();

    $request->session()->regenerateToken();

    // redirect ke halaman login
    return redirect('/menu')->with('danger', 'Anda berhasil logout.');
}
}


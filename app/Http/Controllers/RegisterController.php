<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class RegisterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('../signup');
    }

    public function indexAdmn()
    {
        $admin = User::all();
        return view('../layout/admin', compact('admin'));
    }

    public function create()
    {
        return view('signup');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'username' => 'required',
            'password' => 'required',
            'nama_lengkap' => 'required',
            'email' => 'required',
            'no_telp' => 'required'
        ]);

        $ifDuplicate = $request->input('username');
        $user = User::where('username', $ifDuplicate)->first();

        if ($user) {
            return redirect('/signup')->with('danger', ' Username '.$request->input('username').' sudah terpakai!! Coba yang lain!!');
        } else {
            // Username belum dipakai
            $user = new User;
            $user->username = $ifDuplicate;
            $user->password = bcrypt($request->input('password'));
            $user->nama_lengkap = $request->input('nama_lengkap');
            $user->email = $request->input('email');
            $user->no_telp = $request->input('no_telp');
            $user->save();
            return redirect('/login')->with('success', 'Akun >'.$request->input('nama_lengkap').' berhasil dibuat! Silakan login untuk melanjutkan.');  
        }

        




    }

    

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $admin = User::findOrFail($id); //mencari admin dengan id yang sesuai atau menampilkan 404 jika tidak ditemukan  
        return view('../layout/update_admin', compact('admin'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $admin = User::findOrFail($id);
        //tarik data yang diinput user dan ubah data di database dengan inputan user tadi
        $admin->username = $request->username;
        $admin->nama_lengkap = $request->nama_lengkap;
        $admin->email = $request->email;
        $admin->no_telp = $request->no_telp;
        $admin->password = bcrypt($request->input('password'));
        $admin->save();
        
        if($id==Auth::user()->id){
            return redirect('/admin')->with('success', 'Data diri kamu berhasil diubah!!');
        }else{
            //bila berhasil diubah, kembali ke page barang dan munculkan alert
            return redirect('/admin')->with('success', 'Data Admin berhasil diubah!!');
        }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        User::findOrFail($id)->delete();
        return redirect('/admin')->with('warning', 'Data Admin berhasil dihapus!!');
    }
}

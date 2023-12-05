<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Tiket;
use Intervention\Image\ImageManagerStatic as Image;

class TiketController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

     
    public function index()
    {
        $tiketAll = Tiket::all();
        return view('../tiket', compact('tiketAll'));
    }

    public function create()
    {
        return view('komplain');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nama_pengaju' => 'required',
            'nim' => 'required',
            'keluhan' => 'required',
            'gambar' => 'required|image'
        ]);
        $tiket = new Tiket;
        $tiket->nama_pengaju = $request->input('nama_pengaju');
        $tiket->nim = $request->input('nim');

        $tiket->keluhan = $request->input('keluhan');
        $tiket->status = "Tiket Terkirim";
        $tiket->ket_tiket = "Menunggu Admin...";
    
        if ($request->hasFile('gambar')) { // Check if a file is uploaded
            $gambar = $request->file('gambar');
            if ($gambar->isValid()) { // Check if the file is valid
                $nama_gambar = time() . '.' . $gambar->getClientOriginalExtension();
                // Get the file size
                $fileSize = $gambar->getSize();

                // Compress the image if the file size is greater than 1MB
                if ($fileSize > 1048576) {
                    $compressedImage = Image::make($gambar);
                    $compressedImage->resize(480, 640);
                    $compressedImage->save(public_path('gambar/' . $nama_gambar));
                } else {
                    $gambar->move(public_path('gambar'), $nama_gambar);
                }
                $tiket->gambar = $nama_gambar; // Set the image path in the database
            } else {
                session()->flash('error', 'File gambar tidak valid');
                return redirect()->back(); // Return with error message
            }
        } else {
            session()->flash('error', 'Harap upload gambar bukti');
            return redirect()->back();
        }
    
        try {
            $tiket->save();
            return redirect('/tiket')->with('success', 'Tiket berhasil ditambahkan');
        } catch (\Exception $e) {
            dd($e->getMessage());
        }
    
    }

    public function storeDash(Request $request)
    {
        $validatedData = $request->validate([
            'nama_pengaju' => 'required',
            'nim' => 'required',
            'keluhan' => 'required',
            'gambar' => 'required|image'
        ]);
        $tiket = new Tiket;
        $tiket->nama_pengaju = $request->input('nama_pengaju');
        $tiket->nim = $request->input('nim');

        $tiket->keluhan = $request->input('keluhan');
        $tiket->status = "Tiket Terkirim";
        $tiket->ket_tiket = "Menunggu Admin...";
    
        if ($request->hasFile('gambar')) { // Check if a file is uploaded
            $gambar = $request->file('gambar');
            if ($gambar->isValid()) { // Check if the file is valid
                $nama_gambar = time() . '.' . $gambar->getClientOriginalExtension();
                // Get the file size
                $fileSize = $gambar->getSize();

                // Compress the image if the file size is greater than 1MB
                if ($fileSize > 1048576) {
                    $compressedImage = Image::make($gambar);
                    $compressedImage->resize(480, 640);
                    $compressedImage->save(public_path('gambar/' . $nama_gambar));
                } else {
                    $gambar->move(public_path('gambar'), $nama_gambar);
                }
                $tiket->gambar = $nama_gambar; // Set the image path in the database
            } else {
                session()->flash('error', 'File gambar tidak valid');
                return redirect()->back(); // Return with error message
            }
        } else {
            session()->flash('error', 'Harap upload gambar bukti');
            return redirect()->back();
        }
    
        try {
            $tiket->save();
            return redirect('/dashboard')->with('success', 'Tiket berhasil ditambahkan');
        } catch (\Exception $e) {
            dd($e->getMessage());
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
        $tiket = Tiket::findOrFail($id); //mencari tiket dengan id yang sesuai atau menampilkan 404 jika tidak ditemukan  
        return view('../update_tiket', compact('tiket'));
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
        $tiket = Tiket::findOrFail($id);

        $tiket->nama_pengaju = $request->nama_pengaju;
        $tiket->nim = $request->nim;
        $tiket->keluhan = $request->keluhan;
        $tiket->status = $request->status;
        $tiket->ket_tiket = $request->ket_tiket;
        
        if ($request->hasFile('gambar')) { // Check if a new image is uploaded
            $gambar = $request->gambar;
            if ($gambar->isValid()) { // Check if the new image is valid
                $nama_gambar = time() . '.' . $gambar->getClientOriginalExtension();
                $gambar->move(public_path('gambar'), $nama_gambar); // Save the new image to the 'gambar' directory
                $tiket->gambar = $nama_gambar; // Update the image path in the database
            }
        }

        $tiket->save(); // Save the updated ticket data

        return redirect('/tiket')->with('success', 'Tiket berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $tiket = Tiket::findOrFail($id);

        if ($tiket->gambar) {
            // Delete the image file from the filesystem
            unlink(public_path('gambar/' . $tiket->gambar));
        }

        $tiket->delete();

        return redirect('/tiket')->with('success', 'Tiket berhasil dihapus');
    }
}

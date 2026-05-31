<?php

namespace App\Http\Controllers;

use App\Models\Petugas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PetugasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('petugas.index', [
        'title' => 'Data Petugas',
        'petugas' => Petugas::latest()->get(),
    ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('petugas.create', 
        ['title' => 'Tambah Data Petugas']);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
         $validated = $request->validate([
            'nama_petugas' => 'required|max:255',
            'nip' => 'required|numeric',
            'alamat' => 'required',
            'no_hp' => 'required',
            'email' => 'required|email',
            'gender' => 'required|in:Laki-laki,Perempuan',
        ],
        [
            'nama_petugas.required' => 'Nama petugas tidak boleh kosong',
            'nama_petugas.max' => 'Nama petugas maksimal 255 karakter',

            'nip.required' => 'NIP tidak boleh kosong',
            'nip.numeric' => 'NIP harus berupa angka',

            'alamat.required' => 'Alamat tidak boleh kosong',

            'no_hp.required' => 'Nomor HP tidak boleh kosong',

            'email.required' => 'Email tidak boleh kosong',
            'email.email' => 'Format email tidak valid',

            'gender.required' => 'Gender tidak boleh kosong',
            'gender.in' => 'Gender tidak valid',
        ]);

        try {
            DB::beginTransaction();
            Petugas::create($validated);
            DB::commit();
            return to_route('petugas.index')->withSuccess('Data petugas berhasil ditambahkan');
        }catch (\Exception $e){
            DB::rollBack();
            return to_route('petugas.create')->withError('Data petugas gagal ditambahkan');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Petugas $petugas)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Petugas $petugas)
    {
        return view('petugas.edit',[
            'title' => 'Edit Petugas',
            'petugas' => $petugas,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Petugas $petugas)
    {
        $validated = $request->validate([
        'nama_petugas' => 'required|max:255',
        'nip' => 'required|numeric',
        'alamat' => 'required',
        'no_hp' => 'required',
        'email' => 'required|email',
        'gender' => 'required|in:Laki-laki,Perempuan',
    ],
    [
        'nama_petugas.required' => 'Nama petugas tidak boleh kosong',
        'nama_petugas.max' => 'Nama petugas maksimal 255 karakter',

        'nip.required' => 'NIP tidak boleh kosong',
        'nip.numeric' => 'NIP harus berupa angka',

        'alamat.required' => 'Alamat tidak boleh kosong',

        'no_hp.required' => 'Nomor HP tidak boleh kosong',

        'email.required' => 'Email tidak boleh kosong',
        'email.email' => 'Format email tidak valid',
        
        'gender.required' => 'Gender tidak boleh kosong',
        'gender.in' => 'Gender tidak valid',
    ]);

        try{
            DB::beginTransaction();
            $petugas->update($validated);
            DB::commit();
            return to_route('petugas.index')->withSuccess('Data petugas berhasil diubah');
        }catch (\Exception $e){
            DB::rollBack();
            return to_route('petugas.edit', $petugas)->withError('Data petugas gagal diubah');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Petugas $petugas)
    {
        $petugas->delete($petugas);
            return to_route('petugas.index')->withSuccess('Data berhasil dihapus');
    }
}

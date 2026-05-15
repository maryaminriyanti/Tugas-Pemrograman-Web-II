<?php

namespace App\Http\Controllers;

use App\Models\Kecamatan;
use Illuminate\Http\Request;

class KecamatanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        return view('kecamatan.index', [
            'title' => 'Kecamatan',
            'kecamatans' => Kecamatan::latest()
                ->when($request->search, function ($query, $search) {
                    return $query->where('nama_kecamatan', 'like', "%{$search}%")
                        ->orWhere('kode_kecamatan', 'like', "%{$search}%")
                        ->orWhere('alamat_kantor', 'like', "%{$search}%");
                })
                ->paginate(5)
                ->withQueryString(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('kecamatan.create', 
        ['title' => 'Tambah Kecamatan',]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
            $validated = $request->validate([
            'nama_kecamatan' => 'required|max:255',
            'kode_kecamatan' => 'required|max:255|unique:kecamatans',
            'alamat_kantor' => 'required|max:255',
        ], [

            'nama_kecamatan.required' => 'Nama Kecamatan tidak boleh kosong',
            'nama_kecamatan.max' => 'Nama Kecamatan maximal 255 karakter',

            'kode_kecamatan.required' => 'Kode Kecamatan tidak boleh kosong',
            'kode_kecamatan.max' => 'Kode Kecamatan maximal 255 karakter',
            'kode_kecamatan.unique' => 'Kode Kecamatan sudah digunakan',

            'alamat_kantor.required' => 'Alamat Kantor tidak boleh kosong',
            'alamat_kantor.max' => 'Alamat Kantor maximal 255 karakter',

        ]);

        Kecamatan::create($validated);

        return to_route('kecamatan.index')
            ->withSuccess('Data Kecamatan berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Kecamatan $kecamatan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Kecamatan $kecamatan)
    {
        return view('kecamatan.edit',[
            'title' => 'Edit Kecamatan',
            'kecamatan' => $kecamatan,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Kecamatan $kecamatan)
    {
            $validated = $request->validate([
            'nama_kecamatan' => 'required|max:255',
            'kode_kecamatan' => 'required|max:255|unique:kecamatans,kode_kecamatan,' . $kecamatan->id,
            'alamat_kantor' => 'required|max:255',
        ], [

            'nama_kecamatan.required' => 'Nama Kecamatan tidak boleh kosong',
            'nama_kecamatan.max' => 'Nama Kecamatan maximal 255 karakter',

            'kode_kecamatan.required' => 'Kode Kecamatan tidak boleh kosong',
            'kode_kecamatan.max' => 'Kode Kecamatan maximal 255 karakter',
            'kode_kecamatan.unique' => 'Kode Kecamatan sudah digunakan',

            'alamat_kantor.required' => 'Alamat Kantor tidak boleh kosong',
            'alamat_kantor.max' => 'Alamat Kantor maximal 255 karakter',

        ]);

        $kecamatan->update($validated);

        return to_route('kecamatan.index')
            ->withSuccess('Data Kecamatan berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Kecamatan $kecamatan)
    {
        //
    }
}

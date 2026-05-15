<?php

namespace App\Http\Controllers;

use App\Models\Dusun;
use App\Models\Kecamatan;
use Illuminate\Http\Request;

class DusunController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $dusuns = Dusun::latest();
        $keyword = request('keyword');

        if ($keyword) {
            $dusuns->where('nama_dusun', 'like', '%' . $keyword . '%');
        }

        $kecamatan_id = request('kecamatan_id');

        if ($kecamatan_id) {
            $dusuns->where('kecamatan_id', $kecamatan_id);
        }
        return view('dusun.index', [
            'title' => 'Dusun',
            'kecamatans' => Kecamatan::latest()->get(),
            'dusuns' => $dusuns->paginate(5)->withQueryString(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dusun.create', 
        ['title' => 'Tambah Dusun',
        'kecamatans' => Kecamatan::latest()->get(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
            $validated = $request->validate([

            'nama_dusun' => 'required|max:255',

            'desa_kelurahan' => 'required|max:255',

            'kepala_dusun' => 'required|max:255',

            'jumlah_penduduk' => 'required|integer',

            'luas_wilayah' => 'required|max:255',

            'kecamatan_id' => 'required|exists:kecamatans,id',

        ], [

            'nama_dusun.required' => 'Nama Dusun tidak boleh kosong',
            'nama_dusun.max' => 'Nama Dusun maximal 255 karakter',

            'desa_kelurahan.required' => 'Desa/Kelurahan tidak boleh kosong',
            'desa_kelurahan.max' => 'Desa/Kelurahan maximal 255 karakter',

            'kepala_dusun.required' => 'Kepala Dusun tidak boleh kosong',
            'kepala_dusun.max' => 'Kepala Dusun maximal 255 karakter',

            'jumlah_penduduk.required' => 'Jumlah Penduduk tidak boleh kosong',
            'jumlah_penduduk.integer' => 'Jumlah Penduduk harus berupa angka',

            'luas_wilayah.required' => 'Luas Wilayah tidak boleh kosong',
            'luas_wilayah.max' => 'Luas Wilayah maximal 255 karakter',

            'kecamatan_id.required' => 'Kecamatan tidak boleh kosong',
            'kecamatan_id.exists' => 'Kecamatan yang dipilih tidak ditemukan',

        ]);

        Dusun::create($validated);

        return to_route('dusun.index')->withSuccess('Data Dusun berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Dusun $dusun)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Dusun $dusun)
    {
        return view('dusun.edit', [
            'title' => 'Edit Dusun',
            'dusun' => $dusun,
            'kecamatans' => Kecamatan::latest()->get(),
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Dusun $dusun)
    {
        $validated = $request->validate([
            'nama_dusun' => 'required|max:255',
            'desa_kelurahan' => 'required|max:255',
            'kepala_dusun' => 'required|max:255',
            'jumlah_penduduk' => 'required|integer',
            'luas_wilayah' => 'required|max:255',
            'kecamatan_id' => 'required|exists:kecamatans,id',
        ], [
            'nama_dusun.required' => 'Nama Dusun tidak boleh kosong',
            'nama_dusun.max' => 'Nama Dusun maximal 255 karakter',

            'desa_kelurahan.required' => 'Desa/Kelurahan tidak boleh kosong',
            'desa_kelurahan.max' => 'Desa/Kelurahan maximal 255 karakter',

            'kepala_dusun.required' => 'Kepala Dusun tidak boleh kosong',
            'kepala_dusun.max' => 'Kepala Dusun maximal 255 karakter',

            'jumlah_penduduk.required' => 'Jumlah Penduduk tidak boleh kosong',
            'jumlah_penduduk.integer' => 'Jumlah Penduduk harus berupa angka',

            'luas_wilayah.required' => 'Luas Wilayah tidak boleh kosong',
            'luas_wilayah.max' => 'Luas Wilayah maximal 255 karakter',

            'kecamatan_id.required' => 'Kecamatan tidak boleh kosong',
            'kecamatan_id.exists' => 'Kecamatan yang dipilih tidak ditemukan',
        ]);

        $dusun->update($validated);

        return to_route('dusun.index')->withSuccess('Data Dusun berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Dusun $dusun)
    {
        //
    }
}

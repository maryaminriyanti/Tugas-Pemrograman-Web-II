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
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Dusun $dusun)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Dusun $dusun)
    {
        //
    }
}

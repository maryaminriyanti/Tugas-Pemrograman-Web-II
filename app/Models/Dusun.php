<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

#[Fillable(['nama_dusun','kepala_dusun','jumlah_penduduk','desa_kelurahan','luas_wilayah','kecamatan_id'])]
class Dusun extends Model
{
    /** @use HasFactory<\Database\Factories\DusunFactory> */
    use HasFactory;

    protected $with = ['kecamatan'];

    public function kecamatan(): BelongsTo
    {
        return $this->belongsTo(Kecamatan::class);
    }
}

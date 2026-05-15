<x-app>

    <x-slot:title>{{ $title }}</x-slot>

    <form method="POST" action="{{ route('dusun.update', $dusun) }}">

        @method('PUT')
        @csrf

        <div class="mb-3">
            <label for="nama_dusun" class="form-label">Nama Dusun</label>

            <input type="text" class="form-control @error('nama_dusun') is-invalid @enderror" id="nama_dusun"
                name="nama_dusun" value="{{ old('nama_dusun', $dusun->nama_dusun) }}">

            @error('nama_dusun')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="desa_kelurahan" class="form-label">Desa/Kelurahan</label>

            <input type="text" class="form-control @error('desa_kelurahan') is-invalid @enderror" id="desa_kelurahan"
                name="desa_kelurahan" value="{{ old('desa_kelurahan', $dusun->desa_kelurahan) }}">

            @error('desa_kelurahan')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="kepala_dusun" class="form-label">Kepala Dusun</label>

            <input type="text" class="form-control @error('kepala_dusun') is-invalid @enderror" id="kepala_dusun"
                name="kepala_dusun" value="{{ old('kepala_dusun', $dusun->kepala_dusun) }}">

            @error('kepala_dusun')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="jumlah_penduduk" class="form-label">Jumlah Penduduk</label>

            <input type="number" class="form-control @error('jumlah_penduduk') is-invalid @enderror"
                id="jumlah_penduduk" name="jumlah_penduduk"
                value="{{ old('jumlah_penduduk', $dusun->jumlah_penduduk) }}">

            @error('jumlah_penduduk')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="luas_wilayah" class="form-label">Luas Wilayah</label>

            <input type="text" class="form-control @error('luas_wilayah') is-invalid @enderror" id="luas_wilayah"
                name="luas_wilayah" value="{{ old('luas_wilayah', $dusun->luas_wilayah) }}">

            @error('luas_wilayah')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="kecamatan_id" class="form-label">Kecamatan</label>

            <select class="form-select @error('kecamatan_id') is-invalid @enderror" id="kecamatan_id"
                name="kecamatan_id">

                <option value="">Pilih Kecamatan</option>

                @foreach ($kecamatans as $kecamatan)
                    <option value="{{ $kecamatan->id }}"
                        {{ old('kecamatan_id', $dusun->kecamatan_id) == $kecamatan->id ? 'selected' : '' }}>
                        {{ $kecamatan->nama_kecamatan }}
                    </option>
                @endforeach

            </select>

            @error('kecamatan_id')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <a class="btn btn-warning" href="{{ route('dusun.index') }}" role="button">Cancel</a>

        <button type="submit" class="btn btn-primary">Update</button>

    </form>

</x-app>

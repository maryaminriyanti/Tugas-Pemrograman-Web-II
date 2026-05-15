<x-app>

    <x-slot:title>{{ $title }}</x-slot>

    <form method="POST" action="{{ route('kecamatan.update', $kecamatan) }}">

        @method('PUT')
        @csrf

        <div class="mb-3">

            <label for="nama_kecamatan" class="form-label">Nama Kecamatan</label>

            <input type="text" class="form-control @error('nama_kecamatan') is-invalid @enderror" id="nama_kecamatan"
                name="nama_kecamatan" value="{{ old('nama_kecamatan', $kecamatan->nama_kecamatan) }}">

            @error('nama_kecamatan')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror

        </div>

        <div class="mb-3">

            <label for="kode_kecamatan" class="form-label">Kode Kecamatan</label>

            <input type="text" class="form-control @error('kode_kecamatan') is-invalid @enderror" id="kode_kecamatan"
                name="kode_kecamatan" value="{{ old('kode_kecamatan', $kecamatan->kode_kecamatan) }}">

            @error('kode_kecamatan')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror

        </div>

        <div class="mb-3">

            <label for="alamat_kantor" class="form-label">Alamat Kantor</label>

            <textarea class="form-control @error('alamat_kantor') is-invalid @enderror" id="alamat_kantor"
                name="alamat_kantor"rows="3">{{ old('alamat_kantor', $kecamatan->alamat_kantor) }}</textarea>

            @error('alamat_kantor')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror

        </div>

        <a class="btn btn-warning" href="{{ route('kecamatan.index') }}" role="button">Cancel</a>

        <button type="submit" class="btn btn-primary">Update</button>

    </form>

</x-app>

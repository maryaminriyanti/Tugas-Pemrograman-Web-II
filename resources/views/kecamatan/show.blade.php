<x-app>

    <x-slot:title>{{ $title }}</x-slot>

    <a class="btn btn-warning mb-3" href="{{ route('kecamatan.index') }}" role="button">Back</a>

    {{-- kecamatan --}}

    <h6>Data Kecamatan</h6>

    <ul class="list-group mb-3">

        <li class="list-group-item">Nama Kecamatan : {{ $kecamatan->nama_kecamatan }}</li>

        <li class="list-group-item">Kode Kecamatan : {{ $kecamatan->kode_kecamatan }}</li>

        <li class="list-group-item">Alamat Kantor : {{ $kecamatan->alamat_kantor }}</li>

        <li class="list-group-item">Created At : {{ $kecamatan->created_at->format('d F Y H:i:s') }}</li>

        <li class="list-group-item">Last Update : {{ $kecamatan->updated_at->diffForHumans() }}</li>

    </ul>

    {{-- dusun --}}

    <h6>Data Dusun</h6>

    <ul class="list-group">

        @forelse ($kecamatan->dusuns as $dusun)
            <li class="list-group-item">{{ $dusun->nama_dusun }} - {{ $dusun->desa_kelurahan }}</li>
        @empty
            <li class="list-group-item text-center">Data Dusun Tidak Ditemukan</li>
        @endforelse

    </ul>

</x-app>

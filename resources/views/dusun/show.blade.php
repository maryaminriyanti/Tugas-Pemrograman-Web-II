<x-app>

    <x-slot:title>{{ $title }}</x-slot>

    <a class="btn btn-warning mb-3" href="{{ route('dusun.index') }}" role="button">Back</a>

    {{-- dusun --}}

    <h6>Data Dusun</h6>

    <ul class="list-group mb-3">

        <li class="list-group-item">
            Nama Dusun: {{ $dusun->nama_dusun }}
        </li>

        <li class="list-group-item">
            Desa/Kelurahan: {{ $dusun->desa_kelurahan }}
        </li>

        <li class="list-group-item">
            Kepala Dusun: {{ $dusun->kepala_dusun }}
        </li>

        <li class="list-group-item">
            Jumlah Penduduk: {{ $dusun->jumlah_penduduk }}
        </li>

        <li class="list-group-item">
            Luas Wilayah: {{ $dusun->luas_wilayah }}
        </li>

        <li class="list-group-item">
            Kecamatan: {{ $dusun->kecamatan->nama_kecamatan }}
        </li>

        <li class="list-group-item">
            Created At: {{ $dusun->created_at->format('d F Y H:i:s') }}
        </li>

        <li class="list-group-item">
            Last Update: {{ $dusun->updated_at->diffForHumans() }}
        </li>

    </ul>

</x-app>

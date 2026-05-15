<x-app>

    <x-slot:title>{{ $title }}</x-slot>

    @session('success')
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endsession

    <form action="{{ route('kecamatan.index') }}" method="GET" class="mb-3">

        <div class="row">

            <div class="col-md-10">
                <input type="text" name="search" class="form-control" placeholder="Cari Kecamatan..."
                    value="{{ request('search') }}">
            </div>

            <div class="col-md-2">
                <button class="btn btn-primary w-100">Search</button>
            </div>

        </div>

    </form>

    <table class="table table-bordered border-primary">

        <thead class="table-primary">

            <tr>
                <th>No</th>
                <th>Nama Kecamatan</th>
                <th>Kode Kecamatan</th>
                <th>Alamat Kantor</th>
            </tr>

        </thead>

        <tbody>

            @forelse ($kecamatans as $item)
                <tr>

                    <td>{{ $kecamatans->firstItem() + $loop->index }}</td>
                    <td>{{ $item->nama_kecamatan }}</td>
                    <td>{{ $item->kode_kecamatan }}</td>
                    <td>{{ $item->alamat_kantor }}</td>

                </tr>

            @empty
                <tr>
                    <td colspan="4" class="text-center">Data Kecamatan Tidak Ditemukan</td>
                </tr>
            @endforelse

        </tbody>

    </table>

    {{ $kecamatans->links() }}

</x-app>

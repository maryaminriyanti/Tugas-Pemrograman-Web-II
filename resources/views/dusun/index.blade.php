<x-app>

    <x-slot:title>{{ $title }}</x-slot>

    @session('success')
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endsession

    <a class="btn btn-primary mb-3" href="{{ route('dusun.create') }}" role="button">Create</a>

    <form action="">

        <div class="row g-3 mb-3">

            <div class="col-md-4">
                <input type="text" class="form-control" id="keyword" name="keyword"
                    placeholder="Search dusun name ..." value="{{ request('keyword') }}">
            </div>

            <div class="col-md-4">

                <select class="form-select" id="kecamatan_id" name="kecamatan_id">
                    <option value="">All Kecamatan</option>

                    @foreach ($kecamatans as $kecamatan)
                        <option value="{{ $kecamatan->id }}"
                            {{ request('kecamatan_id') == $kecamatan->id ? 'selected' : '' }}>
                            {{ $kecamatan->nama_kecamatan }}
                        </option>
                    @endforeach
                </select>

            </div>

            <div class="col-md-4">
                <button type="submit" class="btn btn-success">Search</button>
            </div>

        </div>

    </form>

    <table class="table table-bordered border-primary">

        <thead class="table-primary">
            <tr>
                <th>No</th>
                <th>Nama Dusun</th>
                <th>Desa/Kelurahan</th>
                <th>Kepala Dusun</th>
                <th>Jumlah Penduduk</th>
                <th>Luas Wilayah</th>
                <th>Kecamatan</th>
                <th>Aksi</th>
            </tr>
        </thead>

        <tbody>

            @forelse ($dusuns as $dusun)
                <tr>
                    <td>{{ $dusuns->firstItem() + $loop->index }}</td>
                    <td>{{ $dusun->nama_dusun }}</td>
                    <td>{{ $dusun->desa_kelurahan }}</td>
                    <td>{{ $dusun->kepala_dusun }}</td>
                    <td>{{ $dusun->jumlah_penduduk }}</td>
                    <td>{{ $dusun->luas_wilayah }}</td>
                    <td>{{ $dusun->kecamatan->nama_kecamatan }}</td>
                    <td style="white-space: nowrap;">
                        <a class="btn btn-warning btn-sm" href="{{ route('dusun.edit', $dusun) }}"
                            role="button">Edit</a>
                    </td>
                </tr>

            @empty
                <tr>
                    <td colspan="8" class="text-center">Data Dusun Tidak Ditemukan</td>
                </tr>
            @endforelse

        </tbody>

    </table>

    {{ $dusuns->links() }}

</x-app>

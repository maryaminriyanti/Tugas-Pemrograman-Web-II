<x-app>
    <x-slot:title>{{ $title }}</x-slot>

    @session('success')
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endsession

    <a class="btn btn-primary mb-3" href="{{ route('petugas.create') }}" role="button">Create</a>
    <table class="table table-bordered border-primary">
        <thead class="table-primary">
            <tr>
                <th>No</th>
                <th>NIP</th>
                <th>Nama Petugas</th>
                <th>Alamat</th>
                <th>No HP</th>
                <th>Email</th>
                <th style="width: 160px;">Aksi</th>
            </tr>
        </thead>

        <tbody>
            @foreach ($petugas as $item)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $item->nip }}</td>
                    <td>{{ $item->nama_petugas }}</td>
                    <td>{{ $item->alamat }}</td>
                    <td>{{ $item->no_hp }}</td>
                    <td>{{ $item->email }}</td>
                    <td style="white-space: nowrap;">
                        <a class="btn btn-warning btn-sm" href="{{ route('petugas.edit', $item) }}"
                            role="button">Edit</a>

                        <form action="{{ route('petugas.destroy', $item) }}" method="POST" class="d-inline">
                            @method('DELETE')
                            @csrf

                            <button type="submit" class="btn btn-danger btn-sm"
                                onclick="return confirm('Anda yakin?')">
                                Delete
                            </button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

</x-app>

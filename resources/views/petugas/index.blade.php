<x-app>
    <x-slot:title>{{ $title }}</x-slot>



    <table class="table table-bordered border-primary">
        <thead class="table-primary">
            <tr>
                <th>No</th>
                <th>NIP</th>
                <th>Nama Petugas</th>
                <th>Alamat</th>
                <th>No HP</th>
                <th>Email</th>
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
                </tr>
            @endforeach
        </tbody>
    </table>

</x-app>

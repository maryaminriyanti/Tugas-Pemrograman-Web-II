<x-app>
    <x-slot:title>{{ $title }}</x-slot>

    @session('success')
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endsession

    <a class="btn btn-primary mb-3" href="{{ route('petugas.index') }}" role="button">Kembali</a>

    <ul class="list-group">
        @foreach ($petugas as $item)
            <li class="list-group-item">
                {{ $loop->iteration }}. {{ $item->nip }} -- {{ $item->nama_petugas }} -- {{ $item->no_hp }}--
                {{ $item->email }} -- {{ $item->gender }}

                <form action="{{ route('petugas.restore', $item) }}" method="POST" class="d-inline">
                    @method('PUT')
                    @csrf

                    <button type="submit" class="btn btn-warning btn-sm"
                        onclick="return confirm('Anda yakin ingin mengembalikan data?')">Restore</button>
                </form>

                <form action="{{ route('petugas.forceDelete', $item) }}" method="POST" class="d-inline">
                    @method('DELETE')
                    @csrf
                    <button type="submit" class="btn btn-danger btn-sm"
                        onclick="return confirm('Anda yakin ingin menghapus secara permanen?')">Force Delete</button>
                </form>
            </li>
        @endforeach
    </ul>

</x-app>

<x-app>
    <x-slot:title>{{ $title }}</x-slot>

    @session('success')
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endsession

    <a class="btn btn-warning mb-3" href="{{ route('petugas.index') }}" role="button">Kembali</a>

    <ul class="list-group">
        @foreach ($petugas as $item)
            <li class="list-group-item">
                {{ $loop->iteration }}. {{ $item->nip }} -- {{ $item->nama_petugas }} -- {{ $item->alamat }} --
                {{ $item->no_hp }} -- {{ $item->email }}-- {{ $item->gender }}
            </li>
        @endforeach
    </ul>

</x-app>

@extends('layouts.app')

@section('content')

<div class="container mx-auto mt-10">
    <div class="flex justify-between">
        <h1 class="text-2xl font-bold">Daftar Mahasiswa</h1>
        <a href="{{ route('mhs.create') }}" class="bg-blue-500 text-white px-4 py-2 rounded">Tambah Mahasiswa</a>
    </div>

    @if ($message = Session::get('success'))
        <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mt-4">
            {{ $message }}
        </div>
    @endif

    <table class="min-w-full bg-white mt-4">
        <thead>
            <tr>
                <th class="py-2 px-4 border-b">ID</th>
                <th class="py-2 px-4 border-b">NRP</th>
                <th class="py-2 px-4 border-b">Nama</th>
                <th class="py-2 px-4 border-b">Alamat</th>
                <th class="py-2 px-4 border-b">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($mhs as $student)
            <tr>
                <td class="py-2 px-4 border-b">{{ $student->id }}</td>
                <td class="py-2 px-4 border-b">{{ $student->nrp }}</td>
                <td class="py-2 px-4 border-b">{{ $student->nama }}</td>
                <td class="py-2 px-4 border-b">{{ $student->alamat }}</td>
                <td class="py-2 px-4 border-b">
                    <a href="{{ route('mhs.edit', $student->id) }}" class="text-yellow-500 ml-2">Edit</a>
                    <form action="{{ route('mhs.destroy', $student->id) }}" method="POST" class="inline-block">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="text-red-500 ml-2" onclick="return confirm('Anda yakin ingin menghapus data?')" value="delete">Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection

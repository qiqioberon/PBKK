@extends('layouts.app')

@section('content')
    <div class="container mx-auto">
        <h1 class="text-2xl font-bold mb-4">Edit Data Mahasiswa</h1>

        <form action="{{ route('mhs.update', $m) }}" method="POST" class="mt-4">
            @csrf
            @method('PUT')
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="nrp">NRP</label>
                <input type="number" name="nrp" value="{{ $m->nrp }}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="nama">Nama</label>
                <input type="text" name="nama" value="{{ $m->nama }}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="alamat">Alamat</label>
                <input type="text" name="alamat" value="{{ $m->alamat }}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
            </div>
            <br>
            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Update Data</button>
        </form>
    </div>
@endsection

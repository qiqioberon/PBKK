@extends('layouts.app')

@section('content')
    <div class="container mx-auto mt-10">
        <h1 class="text-2xl font-bold">Tambah Mahasiswa</h1>

        @if ($errors->any())
            <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative mt-4">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('mhs.store') }}" method="POST" class="mt-4">
            @csrf
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="nrp">NRP</label>
                <input type="number" name="nrp" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="nama">Nama</label>
                <input type="text" name="nama" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="alamat">Alamat</label>
                <input type="text" name="alamat" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
            </div>
            <br>
            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Tambah Mahasiswa</button>
        </form>
    </div>
@endsection

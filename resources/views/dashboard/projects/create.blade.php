@extends('layouts.app')
@section('content')
    <h1 class="text-2xl font-bold text-blue-600 mb-6 text-center">Tambah Proyek Baru</h1>
    <form action="{{ route('projects.store') }}" method="POST" enctype="multipart/form-data" class="bg-white p-6 rounded shadow flex flex-col gap-4 max-w-lg mx-auto">
        @csrf
        <div>
            <label for="title" class="block mb-1 text-slate-700 font-semibold">Judul Proyek</label>
            <input type="text" name="title" id="title" class="w-full px-4 py-2 border rounded focus:outline-none focus:ring-2 focus:ring-blue-200" required autofocus value="{{ old('title') }}">
        </div>
        <div>
            <label for="description" class="block mb-1 text-slate-700 font-semibold">Deskripsi</label>
            <textarea id="description" name="description" class="w-full px-4 py-2 border rounded focus:outline-none focus:ring-2 focus:ring-blue-200" rows="4" required>{{ old('description') }}</textarea>
        </div>
        <div>
            <label for="url" class="block mb-1 text-slate-700 font-semibold">URL Proyek (Opsional)</label>
            <input id="url" class="w-full px-4 py-2 border rounded focus:outline-none focus:ring-2 focus:ring-blue-200" type="url" name="url" value="{{ old('url') }}" />
        </div>
        <div>
            <label for="image" class="block mb-1 text-slate-700 font-semibold">Gambar Proyek</label>
            <input id="image" class="w-full px-4 py-2 border rounded focus:outline-none focus:ring-2 focus:ring-blue-200" type="file" name="image" required>
            <p class="mt-1 text-sm text-gray-500">PNG, JPG, GIF, SVG (MAX. 2MB).</p>
        </div>
        <div class="flex flex-col sm:flex-row justify-end gap-2 mt-4">
            <a href="{{ route('projects.index') }}" class="px-4 py-2 bg-slate-200 rounded hover:bg-slate-300 text-center">Batal</a>
            <button type="submit" class="px-4 py-2 bg-blue-600 text-white rounded hover:bg-blue-700 text-center">Simpan Proyek</button>
        </div>
    </form>
@endsection
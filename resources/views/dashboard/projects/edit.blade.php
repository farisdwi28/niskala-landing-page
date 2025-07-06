@extends('layouts.app')
@section('content')
    <h1 class="text-2xl font-bold text-blue-600 mb-6 text-center">Edit Proyek</h1>
    <form action="{{ route('projects.update', $project) }}" method="POST" enctype="multipart/form-data" class="bg-white p-6 rounded shadow flex flex-col gap-4 max-w-lg mx-auto">
        @csrf
        @method('PUT')
        <div>
            <label for="title" class="block mb-1 text-slate-700 font-semibold">Judul Proyek</label>
            <input type="text" name="title" id="title" value="{{ old('title', $project->title) }}" required class="w-full px-4 py-2 border rounded focus:outline-none focus:ring-2 focus:ring-blue-200">
        </div>
        <div>
            <label for="description" class="block mb-1 text-slate-700 font-semibold">Deskripsi</label>
            <textarea id="description" name="description" class="w-full px-4 py-2 border rounded focus:outline-none focus:ring-2 focus:ring-blue-200" rows="4" required>{{ old('description', $project->description) }}</textarea>
        </div>
        <div>
            <label for="url" class="block mb-1 text-slate-700 font-semibold">URL Proyek (Opsional)</label>
            <input id="url" class="w-full px-4 py-2 border rounded focus:outline-none focus:ring-2 focus:ring-blue-200" type="url" name="url" value="{{ old('url', $project->url) }}" />
        </div>
        <div>
            <label for="image" class="block mb-1 text-slate-700 font-semibold">Gambar Proyek (Ganti jika perlu)</label>
            <input id="image" class="w-full px-4 py-2 border rounded focus:outline-none focus:ring-2 focus:ring-blue-200" type="file" name="image">
            <p class="mt-1 text-sm text-gray-500">PNG, JPG, GIF, SVG (MAX. 2MB). Kosongkan jika tidak ingin mengganti gambar.</p>
            <div class="mt-2">
                <img src="{{ asset('storage/' . $project->image) }}" alt="Current Image" class="w-32 h-32 object-cover rounded">
            </div>
        </div>
        <div class="flex flex-col sm:flex-row justify-end gap-2 mt-4">
            <a href="{{ route('projects.index') }}" class="px-4 py-2 bg-slate-200 rounded hover:bg-slate-300 text-center">Batal</a>
            <button type="submit" class="px-4 py-2 bg-blue-600 text-white rounded hover:bg-blue-700 text-center">Perbarui Proyek</button>
        </div>
    </form>
@endsection
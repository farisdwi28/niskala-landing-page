@extends('layouts.app')
@section('content')
<div class="container mx-auto px-4 py-8 max-w-lg">
    <h1 class="text-2xl font-bold text-blue-600 mb-6 text-center">Tambah Anggota Tim</h1>
    <form method="POST" action="{{ route('teams.store') }}" enctype="multipart/form-data" class="bg-white p-6 rounded shadow flex flex-col gap-4">
        @csrf
        <div>
            <label for="name" class="block mb-1 text-slate-700 font-semibold">Nama</label>
            <input type="text" name="name" id="name" value="{{ old('name') }}" required class="w-full px-4 py-2 border rounded focus:outline-none focus:ring-2 focus:ring-blue-200">
            @error('name')<div class="text-red-600 text-sm mt-1">{{ $message }}</div>@enderror
        </div>
        <div>
            <label for="position" class="block mb-1 text-slate-700 font-semibold">Posisi</label>
            <input type="text" name="position" id="position" value="{{ old('position') }}" required class="w-full px-4 py-2 border rounded focus:outline-none focus:ring-2 focus:ring-blue-200">
            @error('position')<div class="text-red-600 text-sm mt-1">{{ $message }}</div>@enderror
        </div>
        <div>
            <label for="photo" class="block mb-1 text-slate-700 font-semibold">Foto</label>
            <input type="file" name="photo" id="photo" accept="image/*" required class="w-full px-4 py-2 border rounded focus:outline-none focus:ring-2 focus:ring-blue-200" onchange="previewImage(event)">
            @error('photo')<div class="text-red-600 text-sm mt-1">{{ $message }}</div>@enderror
            <img id="img-preview" class="mt-4 w-24 h-24 rounded-full object-cover hidden mx-auto" />
        </div>
        <div>
            <label for="github" class="block mb-1 text-slate-700 font-semibold">GitHub</label>
            <input type="text" name="github" id="github" value="{{ old('github') }}" class="w-full px-4 py-2 border rounded focus:outline-none focus:ring-2 focus:ring-blue-200">
            @error('github')<div class="text-red-600 text-sm mt-1">{{ $message }}</div>@enderror
        </div>
        <div>
            <label for="linkedin" class="block mb-1 text-slate-700 font-semibold">LinkedIn</label>
            <input type="text" name="linkedin" id="linkedin" value="{{ old('linkedin') }}" class="w-full px-4 py-2 border rounded focus:outline-none focus:ring-2 focus:ring-blue-200">
            @error('linkedin')<div class="text-red-600 text-sm mt-1">{{ $message }}</div>@enderror
        </div>
        <div>
            <label for="instagram" class="block mb-1 text-slate-700 font-semibold">Instagram</label>
            <input type="text" name="instagram" id="instagram" value="{{ old('instagram') }}" class="w-full px-4 py-2 border rounded focus:outline-none focus:ring-2 focus:ring-blue-200">
            @error('instagram')<div class="text-red-600 text-sm mt-1">{{ $message }}</div>@enderror
        </div>
        <div class="flex flex-col sm:flex-row justify-end gap-2 mt-4">
            <a href="{{ route('teams.index') }}" class="px-4 py-2 bg-slate-200 rounded hover:bg-slate-300 text-center">Batal</a>
            <button type="submit" class="px-4 py-2 bg-blue-600 text-white rounded hover:bg-blue-700 text-center">Simpan</button>
        </div>
    </form>
</div>
<script>
function previewImage(event) {
    const [file] = event.target.files;
    if (file) {
        const img = document.getElementById('img-preview');
        img.src = URL.createObjectURL(file);
        img.classList.remove('hidden');
    }
}
</script>
@endsection

@extends('layouts.app')
@section('content')
<div class="container mx-auto px-4 py-8">
    <div class="flex flex-col md:flex-row md:justify-between md:items-center mb-6 gap-4">
        <h1 class="text-2xl font-bold text-blue-600">Daftar Anggota Tim</h1>
        <a href="{{ route('teams.create') }}" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700 transition-colors text-center">Tambah Anggota</a>
    </div>
    @if(session('success'))
        <div class="mb-4 p-3 bg-green-100 text-green-700 rounded">{{ session('success') }}</div>
    @endif
    <!-- Responsive Table for Desktop, Cards for Mobile -->
    <div class="hidden md:block overflow-x-auto">
        <table class="min-w-full bg-white rounded shadow">
            <thead>
                <tr>
                    <th class="px-4 py-2">Foto</th>
                    <th class="px-4 py-2">Nama</th>
                    <th class="px-4 py-2">Posisi</th>
                    <th class="px-4 py-2">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($teamMembers as $member)
                    <tr class="border-t hover:bg-slate-50">
                        <td class="px-4 py-2 text-center">
                            @if($member->photo)
                                <img src="{{ $member->photo }}" alt="{{ $member->name }}" class="w-16 h-16 rounded-full object-cover mx-auto shadow">
                            @else
                                <span class="inline-block w-16 h-16 rounded-full bg-slate-200"></span>
                            @endif
                        </td>
                        <td class="px-4 py-2 font-semibold">{{ $member->name }}</td>
                        <td class="px-4 py-2 text-slate-600">{{ $member->position }}</td>
                        <td class="px-4 py-2">
                            <div class="flex gap-2 justify-center">
                                <a href="{{ route('teams.edit', $member) }}" class="bg-yellow-400 text-white px-3 py-1 rounded hover:bg-yellow-500">Edit</a>
                                <form action="{{ route('teams.destroy', $member) }}" method="POST" onsubmit="return confirm('Yakin ingin menghapus?')">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="bg-red-600 text-white px-3 py-1 rounded hover:bg-red-700">Hapus</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @empty
                    <tr><td colspan="4" class="text-center py-4 text-slate-500">Belum ada anggota tim.</td></tr>
                @endforelse
            </tbody>
        </table>
    </div>
    <!-- Card/Grid for Mobile -->
    <div class="md:hidden grid grid-cols-1 gap-6">
        @forelse ($teamMembers as $member)
            <div class="bg-white rounded-lg shadow p-4 flex items-center gap-4">
                @if($member->photo)
                    <img src="{{ $member->photo }}" alt="{{ $member->name }}" class="w-16 h-16 rounded-full object-cover shadow">
                @else
                    <span class="inline-block w-16 h-16 rounded-full bg-slate-200"></span>
                @endif
                <div class="flex-1">
                    <div class="font-bold text-blue-600">{{ $member->name }}</div>
                    <div class="text-slate-600 mb-2">{{ $member->position }}</div>
                    <div class="flex gap-2">
                        <a href="{{ route('teams.edit', $member) }}" class="bg-yellow-400 text-white px-3 py-1 rounded hover:bg-yellow-500 text-sm">Edit</a>
                        <form action="{{ route('teams.destroy', $member) }}" method="POST" onsubmit="return confirm('Yakin ingin menghapus?')">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="bg-red-600 text-white px-3 py-1 rounded hover:bg-red-700 text-sm">Hapus</button>
                        </form>
                    </div>
                </div>
            </div>
        @empty
            <div class="text-center text-slate-500">Belum ada anggota tim.</div>
        @endforelse
    </div>
    <div class="mt-6">{{ $teamMembers->links() }}</div>
</div>
@endsection

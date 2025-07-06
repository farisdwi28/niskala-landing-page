@extends('layouts.app')
@section('content')
<div class="min-h-screen flex items-center justify-center bg-slate-50">
    <div class="w-full max-w-md bg-white rounded-lg shadow-lg p-8">
        <h2 class="text-2xl font-bold mb-6 text-center text-blue-600">Login</h2>
        @if ($errors->any())
            <div class="mb-4 text-red-600 text-sm">
                {{ $errors->first() }}
            </div>
        @endif
        <form method="POST" action="{{ route('login') }}">
            @csrf
            <div class="mb-4">
                <label for="email" class="block text-slate-700 mb-1">Email</label>
                <input type="email" name="email" id="email" required autofocus class="w-full px-4 py-2 border rounded focus:outline-none focus:ring-2 focus:ring-blue-200">
            </div>
            <div class="mb-6">
                <label for="password" class="block text-slate-700 mb-1">Password</label>
                <input type="password" name="password" id="password" required class="w-full px-4 py-2 border rounded focus:outline-none focus:ring-2 focus:ring-blue-200">
            </div>
            <div class="flex items-center justify-between mb-4">
                <label class="flex items-center">
                    <input type="checkbox" name="remember" class="mr-2">
                    <span class="text-slate-600 text-sm">Remember me</span>
                </label>
            </div>
            <button type="submit" class="w-full bg-blue-600 text-white py-2 rounded hover:bg-blue-700 transition-colors font-semibold">Login</button>
        </form>
    </div>
</div>
@endsection 
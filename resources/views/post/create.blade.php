<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Fitur Post') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <form action="{{ route('post.simpan') }}" method="POST">
                @csrf
                <div class="grid gap-6 mb-6 ">
                    <div>
                        <label for="judul" class="black mb-2 text-sm font-medium text-gray-900">Judul</label>
                        <input type="text" name="judul" class="bg-gray-50 border border-gray-300 text-gray-900 rounded-lg
                        focus:ring-blue-500 focus:border-blue-500block w-full">
                    </div>
                @error('judul')
                    <span class="text-red-500 text-sm mt-2">
                        {{ $message }}
                    </span>
                @enderror
                    <div>
                        <label for="deskripsi" class="black mb-2 text-sm font-medium text-gray-900">Deskripsi</label>
                        <input type="text" name="deskripsi" class="bg-gray-50 border border-gray-300 text-gray-900 rounded-lg
                        focus:ring-blue-500 focus:border-blue-500block w-full">
                    </div>
                @error('deskripsi')
                    <span class="text-red-500 text-sm mt-2">
                        {{ $message }}
                    </span>
                @enderror
                </div>
                <button type="submit" class="mb-3 text-white text-center font-medium bg-blue-700 hover:bg-blue-500 focus:ring-blue-300 rounded-lg sm:w-auto px-5 py-2.5">
                    Simpan
                </button>
            </form>
        </div>
    </div>
</x-app-layout>

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Fitur Post') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <Table class="min-w-max w-full table-auto">
                    <thead>
                        <tr class="bg-gray-200">
                            <th class="py-3 px-6 text-center">No</th>
                            <th class="py-3 px-6 text-center">Judul</th>
                            <th class="py-3 px-6 text-center">Deskripsi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $item)
                            <tr class="border-b border-gray-200">
                                <td class="py-3 px-6 text-center">{{ $item->id }}</td>
                                <td class="py-3 px-6 text-center">{{ $item->judul }}</td>
                                <td class="py-3 px-6 text-center">{{ $item->deskripsi }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </Table>
            </div>
        </div>
    </div>
</x-app-layout>

<x-admin>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Riwayat Tagihan User') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            {{-- Table Tagihan --}}
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg my-10 ">
            <div class="p-6 text-gray-900">
                
                    
                
                <div class="flex items-center justify-between mb-4">
                    
                </div>
                <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                            <tr>
                                <th scope="col" class="px-6 py-3">
                                    Tanggal
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Nama Pelanggan
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Tagihan
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Penggunaan
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Status
                                </th>
                            </tr>
                        </thead>
                        @forelse ($histories as $history)
                        <tbody>
                            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    {{ $history->date }}
                                </th>
                                <td class="px-6 py-4">
                                    {{ $history->history->name }}
                                </td>
                                <td class="px-6 py-4">
                                    {{ $history->price }}
                                </td>
                                <td class="px-6 py-4">
                                    {{ $history->usage }}
                                </td>
                                <td class="px-6 py-4">
                                    {{ $history->status }}
                                </td>
                            </tr>
                        </tbody>
                        @empty
                    
                @endforelse
                    </table>
                    <div class="p-5">
                        {{ $histories->links() }}
                    </div>
                </div>
                

            </div>
            </div>
        </div>
    </div>
</x-admin>

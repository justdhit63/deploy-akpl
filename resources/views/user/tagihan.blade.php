<x-app-layout>

    <div class="py-12 my-10">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <section class="bg-white dark:bg-gray-900 p-3 sm:p-5 rounded-xl shadow-md">
                <div class="mx-auto max-w-screen-xl px-4 lg:px-12">
                    <!-- Start coding here -->
                    <div class="bg-white dark:bg-gray-800 relative shadow-md sm:rounded-lg overflow-hidden">
                        <div class="flex flex-col md:flex-row items-center justify-between space-y-3 md:space-y-0 md:space-x-4 p-4">
                            
                            <div class="w-full md:w-auto flex flex-col md:flex-row space-y-2 md:space-y-0 items-stretch md:items-center justify-end md:space-x-3 flex-shrink-0">
                                <span class="text-xl font-semibold text-white">Tagihan Anda</span>
                                
                            </div>
                        </div>
                        <div class="overflow-x-auto p-5">
                            <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                                    <tr>
                                        <th scope="col" class="px-4 py-3">Tanggal</th>
                                        <th scope="col" class="px-4 py-3">Tagihan</th>
                                        <th scope="col" class="px-4 py-3">Penggunaan</th>
                                        <th scope="col" class="px-4 py-3">Status</th>
                                        <th scope="col" class="px-4 py-3"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ( $bills as $bill )
                                        
                                    
                                    <tr class="border-b dark:border-gray-700">
                                        <th scope="row" class="px-4 py-3 font-medium text-gray-900 whitespace-nowrap dark:text-white">{{ $bill->date }}</th>
                                        <td class="px-4 py-3">Rp. {{ number_format($bill->price) }}</td>
                                        <td class="px-4 py-3">{{ $bill->usage }} m³</td>
                                        <td class="px-4 py-3">
                                            @if ($bill->status == 'paid')
                                                <span class="text-green-500 uppercase text-center">{{ $bill->status }}</span>
                                            @else
                                                <span class="text-yellow-500 uppercase text-center">{{ $bill->status }}</span>
                                                
                                            @endif
                                        </td>
                                        <td class="px-4 py-3">
                                            <a href="{{ route('dashboard.tagihan.payment', $bill) }}" class="hover:text-blue-300 text-blue-500">
                                                Bayar
                                            </a>
                                        </td>
                                    </tr>
                                    @empty
                                    <div class="text-center p-4 rounded-lg shadow-md text-slate-500">Anda Tidak Memiliki Tagihan</div>
                                        
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                </section>
        </div>
    </div>
</x-app-layout>

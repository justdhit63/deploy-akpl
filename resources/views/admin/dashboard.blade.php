<x-admin>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <section class="bg-white dark:bg-gray-900">
                        <div class="py-8 px-4 mx-auto max-w-screen-xl lg:py-16 lg:px-6">
                            <div class="mx-auto max-w-screen-sm text-center lg:mb-8 mb-4">
                                <h2 class="mb-4 text-3xl lg:text-4xl tracking-tight font-extrabold text-gray-900 dark:text-white">Dashboard Admin</h2>
                                <p class="font-light text-gray-500 sm:text-xl dark:text-gray-400">One day, you will have everything you wish for. Start working towards it today</p>
                            </div> 

                            <hr class="w-96 mb-5 mx-auto">

                            <div class="grid gap-8 lg:grid-cols-2 text-center">
                                <a href="{{ route('admin.bill') }}">
                                    <article class="p-6 bg-white rounded-lg border border-gray-200 shadow-md dark:bg-gray-800 dark:border-gray-700 hover:bg-slate-100">
                                        <h2 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Bill's Page</h2>
                                        <p class="">
                                            <ul class="mb-5 font-light text-gray-500 dark:text-gray-400">
                                                <li >Number of Bills : {{ count($bills) }}</li>
                                                <li >Total of Bills : Rp. {{ number_format($bills->sum('price')) }},-</li>
                                                <li >Total of Usage : {{ $bills->sum('usage') }} m³</li>
                                            </ul>
                                        </p>
                                    </article> 
                                </a>
                                <a href="{{ route('admin.history') }}" class="">
                                    <article class="p-6 bg-white rounded-lg border border-gray-200 shadow-md dark:bg-gray-800 dark:border-gray-700 hover:bg-slate-100">
                                        <h2 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">History's Page</h2>
                                        <p class="">
                                            <ul class="mb-5 font-light text-gray-500 dark:text-gray-400">
                                                <li >Number of History Transactions : {{ count($histories) }}</li>
                                                <li >Total of Transactions : Rp. {{ number_format($histories->sum('price'), 0, ',', '.') }},-</li>
                                                <li >Total of Usage : {{ $histories->sum('usage') }} m³</li>
                                            </ul>
                                        </p>
                                    </article>   
                                </a>             
                            </div>  
                        </div>
                      </section>
                </div>
            </div>
        </div>
    </div>
</x-admin>

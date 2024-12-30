<x-admin>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('List Users/Customers') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 bg-white rounded-lg">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    
                        
                    
                    <div class="mb-4">
                        <section class="dark:bg-gray-900 flex items-center">
                            <div class="px-4 mx-auto lg:px-12 w-full">
                              <!-- Start coding here -->
                              <div class="relative bg-white shadow-md dark:bg-gray-800 sm:rounded-lg">
                                <div class="flex flex-col items-center justify-between p-4">
                                  <div class="w-full">
                                    <form class="flex items-center">
                                      <label for="simple-search" class="sr-only">Search</label>
                                      <div class="relative w-full">
                                        <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                          <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor" viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd" />
                                          </svg>
                                        </div>
                                        <input type="text" id="simple-search" class="block w-full p-2 pl-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Search" name="search">
                                      </div>
                                    </form>
                                  </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </section>
                    </div>
                    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                        <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                                <tr>
                                    <th scope="col" class="px-6 py-3">
                                        Nama Pelanggan
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        NIK
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Alamat
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        No. Hp
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        <span class="sr-only">Edit</span>
                                    </th>
                                </tr>
                            </thead>
                            @forelse ($users as $user)
                            <tbody>
                                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        {{ $user->name }}
                                    </th>
                                    <td class="px-6 py-4">
                                        {{ $user->nik }}
                                    </td>
                                    <td class="px-6 py-4">
                                        {{ $user->alamat }}
                                    </td>
                                    <td class="px-6 py-4">
                                        {{ $user->no_hp }}
                                    </td>
                                    <td class="px-6 py-4 text-center">
                                        <form action="{{ route('admin.users.generate', $user) }}" method="POST">
                                            @csrf
                                            <input type="text" name="id" value="{{ $user->id }}" class="hidden">
                                            <button type="submit" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Generate</button>
                                        </form>
                                        
                                    </td>
                                </tr>
                            </tbody>
                            @empty
                            <div>
                                <span class="mx-5 text-gray-500">Data Not Found | <a href="{{ route('admin.users.index') }}" class="text-blue-500 text-sm">&laquo; Back to List</a> </span>
                            </div>
                        
                    @endforelse
                        </table>
                        <div class="p-4">
                            {{ $users->links() }}
                        </div>
                    </div>
        </div>
    </div>
</x-admin>

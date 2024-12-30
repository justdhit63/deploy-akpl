<x-admin>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit User') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    

                    <form class="max-w-sm mx-auto" action="{{ route('admin.users.update', $bill) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="mt-4">
                            <x-input-label for="date" :value="__('Tanggal')" />
                            <x-text-input id="date" class="block mt-1 w-full" type="text" name="date" :value="$bill->date" disabled/>
                            <x-input-error :messages="$errors->get('date')" class="mt-2" />
                        </div>
                        <div class="mt-4">
                            <x-input-label for="name" :value="__('Nama Pelanggan')" />
                            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="$bill->customer->name" disabled/>
                            <x-input-error :messages="$errors->get('name')" class="mt-2" />
                        </div>
                        <div class="mt-4">
                            <x-input-label for="price" :value="__('Price')" />
                            <x-text-input id="price" class="block mt-1 w-full" type="text" name="price" :value="$bill->price" required/>
                            <x-input-error :messages="$errors->get('price')" class="mt-2" />
                        </div>
                        <div class="mt-4">
                            <x-input-label for="status" :value="__('Status Pembayaran')" />
                            <x-text-input id="status" class="block mt-1 w-full" type="text" name="status" :value="$bill->status" required/>
                            <x-input-error :messages="$errors->get('status')" class="mt-2" />
                        </div>
                        <x-primary-button class="justify-center w-full mt-3">
                            {{ __('Submit') }}
                        </x-primary-button>
                    </form>
  
                </div>
            </div>
        </div>
    </div>
</x-admin>

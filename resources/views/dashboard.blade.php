<x-app-layout>

    

    <div class="py-12 my-20">
        <div class="md:max-w-7xl mx-10 md:mx-auto sm:px-6 lg:px-8">
            <div class="mb-20">
                <span class="dark:text-gray-300 text-sm">Halo, {{ Auth::user()->name }}</span>
            </div>
            <div class="grid grid-cols-2 gap-10 md:max-w-2xl md:mx-auto mb-10 justify-center align-middle">
                <div class="">
                    <a href="#" class="flex flex-col items-center bg-white border border-gray-200 rounded-lg shadow md:flex-row hover:bg-gray-100 dark:bg-gradient-to-r dark:border-blue-900 dark:from-blue-900 dark:to dark:bg-indigo-900 dark:hover:bg-blue-900 h-40">
                        <div class="text-xl text-slate-300 font-bold text-center w-36">
                            {{ count($bills) }}
                        </div>
                        <div class="p-4 md:border-l">
                            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white text-center">Jumlah Tagihan</h5>
                        </div>
                    </a>
                </div>
                <div>
                    <a href="#" class="flex flex-col items-center bg-white border border-gray-200 rounded-lg shadow md:flex-row hover:bg-gray-100 dark:bg-gradient-to-l dark:border-blue-900 dark:from-blue-900 dark:to dark:bg-indigo-900 dark:hover:bg-blue-900 h-40">
                        <div class="text-xl text-slate-300 font-bold text-center w-36">
                            {{ count($histories) }}
                        </div>
                        <div class="p-4 md:border-l">
                            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white text-center">Riwayat Tagihan</h5>
                        </div>
                    </a>
                </div>
            </div>
            <hr class="border-slate-600 mb-10">

            

            <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                <div class="grid gap-4">
                    <div>
                        <img class="h-auto max-w-full rounded-lg" src="https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image.jpg" alt="">
                    </div>
                    <div>
                        <img class="h-auto max-w-full rounded-lg" src="https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image-1.jpg" alt="">
                    </div>
                    <div>
                        <img class="h-auto max-w-full rounded-lg" src="https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image-2.jpg" alt="">
                    </div>
                </div>
                <div class="grid gap-4">
                    <div>
                        <img class="h-auto max-w-full rounded-lg" src="https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image-3.jpg" alt="">
                    </div>
                    <div>
                        <img class="h-auto max-w-full rounded-lg" src="https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image-4.jpg" alt="">
                    </div>
                    <div>
                        <img class="h-auto max-w-full rounded-lg" src="https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image-5.jpg" alt="">
                    </div>
                </div>
                <div class="grid gap-4">
                    <div>
                        <img class="h-auto max-w-full rounded-lg" src="https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image-6.jpg" alt="">
                    </div>
                    <div>
                        <img class="h-auto max-w-full rounded-lg" src="https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image-7.jpg" alt="">
                    </div>
                    <div>
                        <img class="h-auto max-w-full rounded-lg" src="https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image-8.jpg" alt="">
                    </div>
                </div>
                <div class="grid gap-4">
                    <div>
                        <img class="h-auto max-w-full rounded-lg" src="https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image-9.jpg" alt="">
                    </div>
                    <div>
                        <img class="h-auto max-w-full rounded-lg" src="https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image-10.jpg" alt="">
                    </div>
                    <div>
                        <img class="h-auto max-w-full rounded-lg" src="https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image-11.jpg" alt="">
                    </div>
                </div>
            </div>

        </div>
    </div>
</x-app-layout>

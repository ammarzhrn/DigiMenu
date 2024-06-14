<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Welcome') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 flex justify-between items-start flex-row">
                    <img class="size-96 object-cover" src="{{$data->gambar}}" alt="">
                    <div class="w-full">
                    <div class="w-full border py-3 px-6 flex justify-start items-start flex-col space-y-2">
                        <h1 class="text-2xl font-bold">{{$data->nama_menu}}
                            <span class="inline-flex items-center rounded-md bg-blue-50 px-2 py-1 text-xs font-medium text-blue-700 ring-1 ring-inset ring-blue-700/10">{{$data->kategori}}</span>
                        </h1>
                        <h1 class=" text-lg">{{$data->desc}}</h1>
                        <h1 class="text-2xl font-bold">{{$data->harga}}
                    </div>
                    <div class="w-full border py-3 px-6 flex justify-start items-start flex-col space-y-2">
                        <form class="p-4 md:p-5" method="POST" action="{{route('customer.store')}}">
                            @csrf
                            <div class="grid gap-4 mb-4 grid-cols-2">
                                <div class="col-span-2">
                                    <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">qty</label>
                                    <input type="number" name="id_menu" value="{{$data->id}}" hidden>
                                    <input type="number" name="id_customer" value="{{$customer->id}}" hidden>
                                    <input type="number" name="id_meja" value="{{$meja->id}}" hidden>
                                    <input type="number" id="harga" oninput="calculateTotal()"  value="{{$data->harga}}" hidden>
                                    <input id="qty" oninput="calculateTotal()"  type="number" name="qty" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Ketik Judul Buku" required="">
                                </div>
                                <div class="col-span-2">
                                    <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">total</label>
                                    <h1 id="total"></h1>
                                    <input id="inputTotal" oninput="calculateTotal()" type="number" name="total" value="" hidden>
                                </div>
                            </div>
                            <button type="submit" class="text-white inline-flex items-center bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                <svg class="me-1 -ms-1 w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z" clip-rule="evenodd"></path></svg>
                                Add new product
                            </button>
                        </form>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        function calculateTotal() {
            let qty = document.getElementById('qty').value;
            let harga = document.getElementById('harga').value;
            let total = qty * harga;
            document.getElementById('total').innerText = isNaN(total) ? 0 : total;
            document.getElementById('inputTotal').value = isNaN(total) ? 0 : total;
        }
    </script>
</x-app-layout>

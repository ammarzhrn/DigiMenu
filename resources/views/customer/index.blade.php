<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Welcome') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 grid grid-cols-4 gap-2">
                    @foreach ($menu as $item)
                    <div class="food-content w-full max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                        <a href="#">
                            <img class="p-5 rounded-t-lg h-64 object-cover" src="https://food.fnr.sndimg.com/content/dam/images/food/fullset/2017/3/21/0/fnd_pasta-istock.jpg.rend.hgtvcom.1280.720.suffix/1490188710731.jpeg" alt="product image" />
                        </a>
                        <div class="px-5 pb-5 space-y-2">
                            <a href="#">
                                <h5 class="text-2xl font-semibold tracking-tight text-gray-900 dark:text-white">{{$item->nama_menu}}</h5>
                            </a>
                            <div class="flex items-center justify-between">
                                <span class="text-2xl font-bold text-gray-900 dark:text-white">Rp. {{$item->harga}}</span>
                                <form action="{{route('customer.show', $item->id)}}">
                                    <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Buy</button>
                                </form>
                            </div>
                        </div>
                    </div> 
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

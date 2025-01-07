<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('LIST ORDERS') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <!-- Display the list of orders -->
                @foreach ($orders as $order)
                                <div class="p-6 border-b border-gray-200 dark:border-gray-700 relative ">
                                    <p><x-input-label>NAME&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:
                                            {{ $order->name }}</x-input-label></p>
                                    <p><x-input-label>ADDRESS&nbsp;&nbsp;&nbsp;&nbsp;: {{ $order->address }}</x-input-label></p>
                                    <p><x-input-label>Total Price&nbsp;&nbsp;&nbsp;: {{ $order->total_price }}</x-input-label></p>
                                    <p><x-input-label>Phone Num&nbsp;: {{ $order->phone }}</x-input-label></p>
                                    @php
                                        $daftarItems = explode(',', $order->items);
                                    @endphp
                                    <div class="flex gap-1">
                                        <div>
                                            <x-input-label>Items&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:
                                            </x-input-label>
                                        </div>
                                        <div class="flex flex-col">
                                            @foreach ($daftarItems as $item)
                                                <span><x-input-label>{{ $item }}</x-input-label></span>
                                            @endforeach
                                        </div>
                                    </div>
                                    <p class="absolute top-0 right-0 m-4 text-2xl font-bold"><x-input-label
                                            class=" text-xl font-bold {{ $order->status == 'Paid' ? '!text-green-500' : '!text-red-600' }}">{{ $order->status }}</x-input-label>
                                    </p>
                                </div>
                @endforeach
            </div>
        </div>
    </div>
</x-app-layout>
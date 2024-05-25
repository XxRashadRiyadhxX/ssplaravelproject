<!-- resources/views/admin/order/view.blade.php -->

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Order Details') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="p-6 sm:px-20 bg-white border-b border-gray-200">
                    <h3 class="text-lg font-semibold mb-4 bg-blue-500 text-white px-4 py-2 rounded-md">Order Details</h3>
                    <div class="mb-4">
                        <strong>Order ID:</strong> {{ $order->id }}
                    </div>
                    <div class="mb-4">
                        <strong>Name:</strong> {{ $order->name }}
                    </div>
                    <div class="mb-4">
                        <strong>Email:</strong> {{ $order->email }}
                    </div>
                    <div class="mb-4">
                        <strong>Phone:</strong> {{ $order->phone }}
                    </div>
                    <div class="mb-4">
                        <strong>Address:</strong> {{ $order->address }}
                    </div>
                    <div class="mb-4">
                        <strong>Color:</strong> {{ $order->color }}
                    </div>
                    <div class="mb-4">
                        <strong>Size:</strong> {{ $order->size }}
                    </div>
                    <div class="mb-4">
                        <strong>Secondary Color:</strong> {{ $order->secondaryColor ?? 'None' }}
                    </div>
                    <div class="mt-4">
                        <a href="{{ route('admin.orders') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                            Back to Orders
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

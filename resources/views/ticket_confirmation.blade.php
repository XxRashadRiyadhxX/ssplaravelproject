<x-guest-layout>
    <div class="bg-gradient-to-br from-red-900 to-black min-h-screen flex justify-center items-center">
        <div class="w-full max-w-md p-6 bg-gradient-to-br from-white to-gray-200 shadow-md rounded-md">
            <h1 class="text-3xl font-semibold mb-6 text-center text-gray-800">Thank you for purchasing your ticket!</h1>

            <p class="text-gray-800 mb-6 text-center">Your reference number is: {{ $referenceNumber }}</p>

            <a href="{{ route('events') }}" class="block w-full bg-yellow-400 hover:bg-yellow-500 text-black font-bold py-2 px-4 rounded text-center">Go back to events</a>
        </div>
    </div>
</x-guest-layout>


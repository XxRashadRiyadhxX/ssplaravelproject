<x-guest-layout>
    <div class="bg-gradient-to-br from-red-900 to-black min-h-screen flex justify-center items-center">
        <div class="w-full max-w-md p-6 bg-gradient-to-br from-white to-gray-200 shadow-md rounded-md">
            <h2 class="text-3xl font-semibold mb-6 text-center text-gray-800">Event 3 Tickets</h2>

            <!-- Validation Errors -->
            <x-validation-errors class="mb-4" />

            <form method="POST" action="{{ route('ticket.book') }}" class="space-y-4">
                @csrf

                <input type="hidden" name="event_id" value="3">

                <div>
                    <label for="name" class="block text-sm font-bold mb-1 text-gray-800">Name</label>
                    <x-input id="name" class="block w-full rounded-md border-gray-300 shadow-sm focus:border-red-500 focus:ring-red-500" type="text" name="name" required autofocus />
                </div>

                <div>
                    <label for="email" class="block text-sm font-bold mb-1 text-gray-800">Email</label>
                    <x-input id="email" class="block w-full rounded-md border-gray-300 shadow-sm focus:border-red-500 focus:ring-red-500" type="email" name="email" :value="old('email')" required />
                </div>

                <div>
                    <label for="phone_number" class="block text-sm font-bold mb-1 text-gray-800">Phone Number</label>
                    <x-input id="phone_number" class="block w-full rounded-md border-gray-300 shadow-sm focus:border-red-500 focus:ring-red-500" type="text" name="phone_number" required />
                </div>

                <x-button class="w-full bg-yellow-500 hover:bg-yellow-600 text-black">
                    Book Ticket
                </x-button>
            </form>
        </div>
    </div>
</x-guest-layout>

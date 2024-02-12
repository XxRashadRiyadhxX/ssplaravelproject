<x-app-layout>

    <div class="container mx-auto mt-1">
        <div class="px-4 sm:px-6 lg:px-8 bg-black pt-4">

            @if (session('success'))
                <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative mt-4 mb-5"
                    role="alert">
                    <strong class="font-bold">Success!</strong>
                    <span class="block sm:inline">{{ session('success') }}</span>
                    <span class="absolute top-0 bottom-0 right-0 px-4 py-3">
                        <svg class="fill-current h-6 w-6 text-red-500" role="button" xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 20 20">
                            <title>Close</title>
                            <path
                                d="M14.348 5.652a.5.5 0 010 .707L9.707 10l4.641 4.641a.5.5 0 11-.707.707L9 10.707l-4.641 4.641a.5.5 0 11-.707-.707L8.293 10 3.652 5.359a.5.5 0 01.707-.707L9 9.293l4.641-4.641a.5.5 0 01.707 0z"
                                clip-rule="evenodd" fill-rule="evenodd"></path>
                        </svg>
                    </span>
                </div>
            @endif

            <div class="sm:flex sm:items-center">
                <div class="sm:flex-auto">
                    <h1 class="text-base font-semibold leading-6 text-red-900">Products</h1>
                    <p class="mt-2 text-sm text-red-700">A list of all the products including their name, price, and description.</p>
                </div>
                <div class="mt-4 sm:ml-16 sm:mt-0 sm:flex-none">
                    <a href="{{ route('product.create') }}"
                        class="block rounded-md bg-red-600 px-3 py-2 text-center text-sm font-semibold text-white shadow-sm hover:bg-red-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-red-600">
                        Create Product
                    </a>
                </div>
            </div>


            <div class="mt-8 flow-root">
                <div class="-mx-4 -my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                    <div class="inline-block min-w-full py-2 align-middle sm:px-6 lg:px-8">
                        <table class="min-w-full divide-y divide-red-300">
                            <thead>
                                <tr>
                                    <th scope="col"
                                        class="py-3.5 pl-4 pr-3 text-left text-sm font-semibold text-red-900 sm:pl-0">
                                        Product Name
                                    </th>
                                    <th scope="col"
                                        class="px-3 py-3.5 text-left text-sm font-semibold text-red-900">
                                        Price</th>
                                    <th scope="col"
                                        class="px-3 py-3.5 text-left text-sm font-semibold text-red-900">
                                        Description</th>
                                    <th scope="col"
                                        class="px-3 py-3.5 text-left text-sm font-semibold text-red-900">
                                        Actions</th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-red-200">
                                @foreach ($products as $product)
                                    <tr>
                                        <td
                                            class="whitespace-nowrap py-4 pl-4 pr-3 text-sm font-medium text-red-900 sm:pl-0">
                                            {{ $product->Product }}</td>
                                        <td
                                            class="whitespace-nowrap py-4 pl-4 pr-3 text-sm font-medium text-red-900 sm:pl-0">
                                            {{ $product->Price }}</td>
                                        <td
                                            class="whitespace-nowrap py-4 pl-4 pr-3 text-sm font-medium text-red-900 sm:pl-0">
                                            {{ $product->Description }}</td>
                                        <td
                                            class="whitespace-nowrap py-4 pl-4 pr-3 text-sm font-medium text-red-900 sm:pl-0">
                                            <div class="flex gap-3">
                                                <a href="{{ route('product.edit', $product->id) }}"
                                                    class="rounded bg-red-900 px-2 py-1 text-xs font-semibold text-white shadow-sm ring-1 ring-inset ring-red-300 hover:bg-red-800">Edit</a>
                                                <form
                                                    action="{{ route('product.destroy', $product->id) }}"
                                                    method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="rounded bg-red-900 px-2 py-1 text-xs font-semibold text-white shadow-sm ring-1 ring-inset ring-red-300 hover:bg-red-800">Delete</button>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        {{ $products->links() }}
    </div>
</x-app-layout>

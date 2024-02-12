<x-app-layout>
    <div class="container mx-auto mt-1">
        <div class="space-y-10 divide-y divide-red-900/10">

            <div class="bg-black grid grid-cols-1 gap-x-8 gap-y-8 md:grid-cols-3">
                <div class="px-4 sm:px-0">
                    <h2 class="text-base font-semibold leading-7 text-red-700">
                        @if($product->id)
                            Update Product
                        @else
                            Create New Product
                        @endif
                    </h2>
                    <p class="mt-1 text-sm leading-6 text-red-600">
                        @if($product->id)
                            Update the product's details.
                        @else
                            Enter details for the new product.
                        @endif
                    </p>
                </div>

                <form method="post"
                    @if($product->id)
                        action="{{ route('product.update', $product->id) }}"
                    @else
                        action="{{ route('product.store') }}"
                    @endif
                    class="bg-black shadow-sm ring-1 ring-red-900/5 sm:rounded-xl md:col-span-2">

                    @csrf
                    @if ($product->id)
                        @method('PUT')
                    @endif

                    <div class="px-4 py-6 sm:p-8">
                        <div class="grid max-w-2xl grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">

                        <div class="col-span-full">
                            <label for="product" class="block text-sm font-medium leading-6 text-red-200">
                                Product Name
                            </label>
                            <div class="mt-2">
                                <input id="product" name="Product" type="text"
                                    value="{{ old('Product', $product->Product) }}"
                                    class="block w-full rounded-md border-0 py-1.5 text-red-600 shadow-sm ring-1 ring-inset ring-red-700 placeholder:text-red-400 focus:ring-2 focus:ring-inset focus:ring-red-600 sm:text-sm sm:leading-6" />
                            </div>
                            <p class="mt-3 text-sm leading-6 text-red-600">
                                Name of the product.
                            </p>
                            @error('Product')
                                <p class="mt-3 text-sm leading-6 text-red-600">
                                    {{ $message }}
                                </p>
                            @enderror
                        </div>

                        <div class="col-span-full">
                            <label for="price" class="block text-sm font-medium leading-6 text-red-200">
                                Price
                            </label>
                            <div class="mt-2">
                                <input id="price" name="Price" type="number"
                                    value="{{ old('Price', $product->Price) }}"
                                    class="block w-full rounded-md border-0 py-1.5 text-red-600 shadow-sm ring-1 ring-inset ring-red-700 placeholder:text-red-400 focus:ring-2 focus:ring-inset focus:ring-red-600 sm:text-sm sm:leading-6" />
                            </div>
                            <p class="mt-3 text-sm leading-6 text-red-600">
                                Price of the product.
                            </p>
                            @error('Price')
                                <p class="mt-3 text-sm leading-6 text-red-600">
                                    {{ $message }}
                                </p>
                            @enderror
                        </div>

                        <div class="col-span-full">
                            <label for="description" class="block text-sm font-medium leading-6 text-red-200">
                                Description
                            </label>
                            <div class="mt-2">
                                <textarea id="description" name="Description" rows="3"
                                    class="block w-full rounded-md border-0 py-1.5 text-red-600 shadow-sm ring-1 ring-inset ring-red-700 placeholder:text-red-400 focus:ring-2 focus:ring-inset focus:ring-red-600 sm:text-sm sm:leading-6">{{ old('Description', $product->Description) }}</textarea>
                            </div>
                            <p class="mt-3 text-sm leading-6 text-red-600">
                                Description of the product.
                            </p>
                            @error('Description')
                                <p class="mt-3 text-sm leading-6 text-red-600">
                                    {{ $message }}
                                </p>
                            @enderror
                        </div>


                        </div>
                    </div>
                    <div class="flex items-center justify-end gap-x-6 border-t border-red-900/10 px-4 py-4 sm:px-8">
                        <a href="{{ route('product.index') }}" class="text-sm font-semibold leading-6 text-red-200">Cancel</a>
                        <button type="submit"
                            class="rounded-md bg-red-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-red-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-red-600">
                            @if($product->id)
                                Update
                            @else
                                Save
                            @endif
                        </button>
                    </div>
                </form>
            </div>

        </div>
    </div>
</x-app-layout>

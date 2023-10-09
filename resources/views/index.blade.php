@extends('layouts.product')

@section('title', 'Index')

@section('content')
    <!-- component -->
    <div>
        <button
            class="transform rounded border border-blue-600 bg-transparent m-3 px-4 py-2 font-semibold text-black-600 transition duration-200 ease-in hover:-translate-y-1 hover:border-transparent hover:bg-blue-600 hover:text-white active:translate-y-0">
            <a href="/products/create">Create</a>
        </button>
    </div>

    <table class="block min-w-full border-collapse md:table">
        <thead class="block md:table-header-group">
            <tr class="border-grey-500 absolute -left-full -top-full block border md:relative md:left-auto md:top-auto md:table-row md:border-none">
                <th class="md:border-grey-500 block w-1/6 bg-gray-600 p-2 text-left font-bold text-white md:table-cell md:border">ID</th>
                <th class="md:border-grey-500 block w-1/6 bg-gray-600 p-2 text-left font-bold text-white md:table-cell md:border">Name</th>
                <th class="md:border-grey-500 block w-1/6 bg-gray-600 p-2 text-left font-bold text-white md:table-cell md:border">Price</th>
                <th class="md:border-grey-500 block w-1/6 bg-gray-600 p-2 text-left font-bold text-white md:table-cell md:border">Quantity</th>
                <th class="md:border-grey-500 block w-1/6 bg-gray-600 p-2 text-left font-bold text-white md:table-cell md:border">Status</th>
                <th class="md:border-grey-500 block w-1/6 bg-gray-600 p-2 text-left font-bold text-white md:table-cell md:border">Actions</th>
            </tr>
        </thead>
        @foreach ($products as $product)
            <tbody class="block md:table-row-group">
                <tr class="border-grey-500 block border bg-gray-300 md:table-row md:border-none">
                    <td class="md:border-grey-500 block w-1/6 p-2 text-left md:table-cell md:border"><span class="inline-block w-full font-bold md:hidden">ID</span>{{ $product->id }}
                    </td>
                    <td class="md:border-grey-500 block w-1/6 p-2 text-left md:table-cell md:border"><span
                            class="inline-block w-full font-bold md:hidden">Name</span>{{ $product->name }}</td>
                    <td class="md:border-grey-500 block w-1/6 p-2 text-left md:table-cell md:border"><span
                            class="inline-block w-full font-bold md:hidden">Price</span>{{ $product->price }}
                    </td>
                    <td class="md:border-grey-500 block w-1/6 p-2 text-left md:table-cell md:border"><span
                            class="inline-block w-full font-bold md:hidden">Quantity</span>{{ $product->qty }}
                    </td>
                    <td class="md:border-grey-500 block w-1/6 p-2 text-left md:table-cell md:border"><span
                            class="inline-block w-full font-bold md:hidden">Status</span>{{ $product->status }}
                    </td>
                    <td class="md:border-grey-500 block w-1/6 p-2 text-left md:table-cell md:border">
                        <span class="inline-block w-full font-bold md:hidden">Actions</span>
                        <button class="rounded border border-blue-500 bg-blue-500 px-2 py-1 font-bold text-white hover:bg-blue-700">
                            <a href="/products/{{$product->id}}/edit">Edit</a>
                        </button>
                        <button class="rounded border border-red-500 bg-red-500 px-2 py-1 font-bold text-white hover:bg-red-700">
                            <a href="">Delete</a>
                        </button>
                    </td>
                </tr>
            </tbody>
        @endforeach

    </table>

    {{ $products->links() }}
@endsection

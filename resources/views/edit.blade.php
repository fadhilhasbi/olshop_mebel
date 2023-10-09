@extends('layouts.product')

@section('title', 'Create')

@section('content')
    <div class="flex items-center justify-center p-12">
        <div class="mx-auto w-full max-w-[550px]">
            <form action="/products/{{ $product->id }}" method="POST">
                @method('PUT') @csrf
                <div class="-mx-3">
                    <div class="w-full px-3 sm:w-1/2">
                        <div class="mb-5">
                            <label for="" class="mb-3 block text-base font-medium text-[#07074D]">
                                Name
                            </label>
                            <input type="text" name="name" id="" placeholder="Ex: Banana" value="{{ $product->name }}"
                                class="w-full rounded-md border border-[#e0e0e0] bg-white px-6 py-3 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
                        </div>
                    </div>
                    <div class="w-full px-3 sm:w-1/2">
                        <div class="mb-5">
                            <label for="" class="mb-3 block text-base font-medium text-[#07074D]">
                                Price
                            </label>
                            <input type="number" name="price" id="" placeholder="Only number (Ex.12000)" value="{{ $product->price }}"
                                class="w-full rounded-md border border-[#e0e0e0] bg-white px-6 py-3 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
                        </div>
                    </div>
                    <div class="w-full px-3 sm:w-1/2">
                        <div class="mb-5">
                            <label for="" class="mb-3 block text-base font-medium text-[#07074D]">
                                Quantity
                            </label>
                            <input type="number" name="qty" id="" placeholder="Input your quantity" value="{{ $product->qty }}"
                                class="w-full rounded-md border border-[#e0e0e0] bg-white px-6 py-3 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
                        </div>
                    </div>
                </div>

                <div class="mb-5">
                    <label class="mb-3 block text-base font-medium text-[#07074D]">
                        Status
                    </label>
                    <div class="flex items-center space-x-6">
                        <div class="flex items-center">
                            <input type="radio" name="status" value="1" id="radioButton1" class="h-5 w-5" {{ $product->status == 1 ? 'checked' : '' }} />
                            <label for="radioButton1" class="pl-3 text-base font-medium text-[#07074D]">
                                True
                            </label>
                        </div>
                        <div class="flex items-center">
                            <input type="radio" name="status" value="0" id="radioButton2" class="h-5 w-5" {{ $product->status == 0 ? 'checked' : '' }} />
                            <label for="radioButton2" class="pl-3 text-base font-medium text-[#07074D]">
                                False
                            </label>
                        </div>
                    </div>
                </div>

                <div>
                    <button class="hover:shadow-form rounded-md bg-[#6A64F1] px-8 py-3 text-center text-base font-semibold text-white outline-none">
                        Submit
                    </button>
                </div>
            </form>
        </div>
    </div>

@endsection

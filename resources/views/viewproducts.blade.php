@extends('layouts.layout')
@section('content')
<div class="m-8">
    <a class="m-1 p-3 underline bg-gray-300 hover:bg-green-300 text-blue-500" href="{{ config('app.url')}}/">Home</a>
    <a class="m-1 p-3 underline bg-gray-300 hover:bg-green-300 text-blue-500" href="{{ config('app.url')}}/products/create">Create Product</a>
</div>
<h1 class="p-2 text-3xl">Available Products</h1>
<div id="table-products" class="m-4 mb-8">
    <table>
        <thead class="font-bold">
            <td>Name</td>
            <td>Description</td>
            <td>Count</td>
            <td>Price</td>
        </thead>
        <tbody>
            @foreach ($allProducts as $product)
            <tr>
                <td>{{ $product->name }}</td>
                <td class="inner-table">{{ $product->description }}</td>
                <td class="inner-table">{{ $product->count }}</td>
                <td class="inner-table">${{ $product->price }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
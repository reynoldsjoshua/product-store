@extends('layouts.layout')
@section('content')
<div class="m-8">
    <a class="m-1 p-3 underline bg-gray-300 hover:bg-green-300 text-blue-500" href="{{ config('app.url')}}/products">View Products</a>
    <a class="m-1 p-3 underline bg-gray-300 hover:bg-green-300 text-blue-500" href="{{ config('app.url')}}/products/create">Create Product</a>
</div>
<h1 class="p-2 text-5xl">Product Store</h1>
@endsection

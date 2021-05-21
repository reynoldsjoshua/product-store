@extends('layouts.layout')
@section('content')
<div class="m-8">
    <a class="m-1 p-3 underline bg-gray-300 hover:bg-green-300 text-blue-500" href="{{ config('app.url')}}/">Home</a>
    <a class="m-1 p-3 underline bg-gray-300 hover:bg-green-300 text-blue-500" href="{{ config('app.url')}}/products">View Products</a>
</div>
<h1 class="p-2 text-3xl">Create a Product</h1>
<div class="grid justify-items-center">
    <div class="bg-gray-300 p-4 m-4 mb-8 w-80 md:w-96">
        <form class="space-y-4" method="POST" action="{{ config('app.url')}}/products">
            @csrf
            <div class="form-input">
                <label>Name</label> <input class="w-full h-8" type="text" name="name">
                @error('name')
                <span class="text-red-500">{{$message}}</span>
                @enderror
            </div>
            <div class="form-input">
                <label>Description</label> <input class="w-full h-8" type="text" name="description">
                @error('description')
                <span class="text-red-500">{{$message}}</span>
                @enderror
            </div>
            <div class="form-input">
                <label>Count</label> <input class="w-full h-8" type="number" name="count">
                @error('count')
                <span class="text-red-500">{{$message}}</span>
                @enderror
            </div>
            <div class="form-input">
                <label>Price</label> <input class="w-full h-8" type="number" name="price">
                @error('price')
                <span class="text-red-500">{{$message}}</span>
                @enderror
            </div>
            <button class="bg-green-300 p-4 w-full text-2xl" type="submit">Submit</button>
        </form>
    </div>
</div>
@endsection

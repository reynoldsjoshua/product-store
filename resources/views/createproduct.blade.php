<!doctype html>
<html lang="{{ app()->getLocale() }}">

<head>
    <title>Create Product | Product Store</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css">
</head>

<body>
    <div class="grid content justify-items-center mt-8">
        <h1 class="p-2 text-3xl">Enter Details to create a product</h1>
        <div class="m-8">
            <a class="m-1 p-3 underline bg-gray-300 hover:bg-green-300 text-blue-500" href="{{ config('app.url')}}/">Home</a>
            <a class="m-1 p-3 underline bg-gray-300 hover:bg-green-300 text-blue-500" href="{{ config('app.url')}}/products">View Products</a>
        </div>
        <div class="grid justify-items-center">
            <div class="bg-gray-300 p-4 m-4 mb-8 w-full max-w-lg">
                <form class="space-y-4" method="POST" action="{{ config('app.url')}}/products">
                    @csrf
                    <div class="form-input">
                        <label>Name</label> <input class="w-full h-8" type="text" name="name" required>
                    </div>
                    <div class="form-input">
                        <label>Description</label> <input class="w-full h-8" type="text" name="description" required>
                    </div>
                    <div class="form-input">
                        <label>Count</label> <input class="w-full h-8" type="number" name="count" required>
                    </div>
                    <div class="form-input">
                        <label>Price</label> <input class="w-full h-8" type="number" name="price" required>
                    </div>
                    <button class="bg-green-300 p-4 w-full text-2xl" type="submit">Submit</button>
                </form>
            </div>
        </div>
    </div>
</body>

</html>
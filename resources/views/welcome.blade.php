<!doctype html>
<html lang="{{ app()->getLocale() }}">

<head>
    <title>View Products | Product Store</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css">
</head>

<body>
    <div class="grid content justify-items-center mt-8">
        <h1 class="p-2 text-5xl">Product Store</h1>
        <div class="m-8">
            <a class="m-1 p-3 underline bg-gray-300 hover:bg-green-300 text-blue-500" href="{{ config('app.url')}}/products">View Products</a>
            <a class="m-1 p-3 underline bg-gray-300 hover:bg-green-300 text-blue-500" href="{{ config('app.url')}}/products/create">Create Product</a>
        </div>
    </div>
</body>

</html>
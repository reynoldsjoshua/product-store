<!doctype html>
<html lang="{{ app()->getLocale() }}">

<head>
    <title>View Products | Product Store</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css">
    <style>
    table {

        border-collapse: collapse;

    }

    th td {
        font-weight: bold;
        font-size: 110%;
    }

    td,
    th {
        border: 1px solid #dddddd;
        text-align: left;
        padding: 8px;
    }

    tr:nth-child(even) {
        background-color: #dddddd;
    }

    </style>
</head>

<body>
    <div class="grid content justify-items-center mt-8">
        <h1 class="p-2 text-3xl">Here's a list of available products</h1>
        <div class="m-8">
            <a class="m-1 p-3 underline bg-gray-300 hover:bg-green-300 text-blue-500" href="{{ config('app.url')}}/">Home</a>
            <a class="m-1 p-3 underline bg-gray-300 hover:bg-green-300 text-blue-500" href="{{ config('app.url')}}/products/create">Create Product</a>
        </div>
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
    </div>
</body>

</html>

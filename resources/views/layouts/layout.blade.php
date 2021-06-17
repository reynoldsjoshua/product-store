<!doctype html>
<html lang="{{ app()->getLocale() }}">

<head>
    <title>Product Store</title>
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
        @yield('content')
    </div>
</body>

</html>
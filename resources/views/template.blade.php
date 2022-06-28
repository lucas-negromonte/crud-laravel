<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ url(mix('css/app.css')) }}" />

    <title>{{ $title ?? 'CRUD Em Laravel' }}</title>
</head>

<body>
    <div class="bg-light p-4">
        <div class="container">

            <div class="row">
                <div class="col my-auto">
                    @if (!empty($title))
                        <h1>{{ $title }}</h1>
                    @else
                        <h1>CRUD - Laravel</h1>
                    @endif
                </div>
                <div class="col my-auto">
                    @yield('top')
                </div>
            </div>
        </div>
    </div>
    
    <div class="container">
        @yield('content')
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>

</html>

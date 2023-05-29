<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>

    {{-- CDN Bootstrap --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>

    @include('layouts.Header')

    <div class="container m-auto p-5 d-flex col gap-5">
    @yield('content')

    @php
        $categories = App\Models\Category::all();
    @endphp


    <div class="d-flex row" style="height:30%;">
        <h4 class="side" style="background-color: #ffc107">Category</h4>

        @foreach ( $categories as $category)
            <a href="/category/{{ $category->id }}" class="sidecat text-decoration-none text-dark">{{ $category->category }}</a>
        @endforeach

    </div>
    </div>


    @include('layouts.Footer')


    {{-- CDN Script --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    {{-- font --}}
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    {{-- css --}}
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    @include('guest.partials.header')
    <img class="jumbo" src="{{ asset('images/jumbotron.jpg') }}" alt="">

    <main>
        @yield('content')
    </main>

    @include('guest.partials.other_links')
    @include('guest.partials.footer')
</body>
</html>

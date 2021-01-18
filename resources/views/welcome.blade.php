<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Abiitira Electronics Systems Uganda Limited</title>
        {{-- import bootstrap --}}
        <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.css') }}" type="text/css">
        <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.min.css') }}" type="text/css">
        <link rel="stylesheet" href="{{ asset('customcss/styles.css') }}" type="text/css">
    </head>
    <body>
        @include('sections.navbar')
        @include('sections.slider')

        @include('sections.footer')
        <script src="{{ asset('bootstrap/js/jquery.js') }}"></script>
        <script src="{{ asset('bootstrap/js/bootstrap.min.js') }}"></script>
    </body>
</html>

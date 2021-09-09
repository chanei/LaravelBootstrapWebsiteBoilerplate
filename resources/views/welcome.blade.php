<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Bootstrap website boiler</title>
        <meta name="description" content="Boiler plate by Lukwata John Rogers">
        {{-- import bootstrap --}}
        <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.css') }}" type="text/css">
        <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.min.css') }}" type="text/css">
        <link rel="stylesheet" href="{{ asset('customcss/styles.css') }}" type="text/css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="shortcut icon" href="{{ url('favicon.ico') }}">

    </head>
    <body>
        @include('sections.navbar')
        @include('sections.slider')

        @include('sections.footer')
        <script src="{{ asset('bootstrap/js/jquery.js') }}"></script>
        <script src="{{ asset('bootstrap/js/bootstrap.min.js') }}"></script>
    </body>
</html>

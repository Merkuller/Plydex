<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>      

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <!-- Styles -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
        <link href="{{ mix('css/app.css') }}" rel="stylesheet" >
       
    </head>
    <body >

        
        @include('header')

        @yield('content') 

        @include('footer')

        <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
        <script src="{{ mix('js/app.js') }}"></script>
    </body>
</html>

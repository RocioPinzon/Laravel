
@extends('layouts.app2')

@section('content')
<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Emails</title>
    <!-- Scripts -->
    <!--<script src="{{ asset('js/app.js') }}" defer></script>-->
    <!-- Styles -->
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
</head>

<body class="bg-gray-100 h-screen antialiased leading-none font-sans">

    <h1>Contacto</h1>
    <p><strong>Nombre: </strong>{{ $contacto['name'] }}</p>
    <p><strong>Email: </strong>{{ $contacto['email'] }}</p>
    <p><strong>Mensaje: </strong>{{ $contacto['mensaje'] }}</p>
</body>
</html>

@endsection

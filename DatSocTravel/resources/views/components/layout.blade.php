<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- <title>{{ $attributes['title'] ?? 'DatSocTravel'</title> --}}
    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.min.css') }}">

    <link rel="stylesheet" type="text/css" media="screen" href="style.css" />

    <link href="https://fonts.googleapis.com/css2?family=Baloo+2&display=swap" rel="stylesheet"/>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css"/>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js"></script>
    <script src="jquery-3.6.0.min.js"></script>
    <script src="bootstrap/js/bootstrap.bundle.min.js"></script>
  </head>
</head>
<body>
    @include('client.homepage')
    @include('client.showtours')
    @include('client.tourist_attraction')
    @include('client.news')
    @include('client.map')
    @include('client.footer')
</body>
</html>
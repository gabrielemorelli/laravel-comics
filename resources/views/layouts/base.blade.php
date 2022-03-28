<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('pageTitle')</title>
    <link rel='stylesheet' href="{{asset('css/app.css)}}">
   
</head>
<body>

@include('partials.header')
    
<main>
@yield('content')
</main>

@include('partials.footer')
</body>
</html>
<!Doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" value="{{ csrf_token() }}" />

    <title>Elisa-Carlos</title>

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

</head>

<body>
    <div id="app"></div>
  
    <script type="text/javascript" src="{{ asset('js/app.js') }}"></script>
</body>

</html>
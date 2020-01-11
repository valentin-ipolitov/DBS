<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name', 'Zadanie') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Styles -->
    <link href="{{ asset('css/reset.css') }}" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body>

   @if (Session::has('message'))
        <?php 
            $message = Session::get('message');
            Session::forget('message');
        ?>
        <p class="info-msg{{ $message['status'] }}">
            {{ $message['msg'] }}
        </p>
   @endif
    
   <div class="wrap">
       @yield('content')
   </div>

</body>
</html>

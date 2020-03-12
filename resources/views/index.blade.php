<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name', 'Zadanie') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('js/validation.js') }}" defer></script>

    <!-- Styles -->
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
        <div class="form_wrap">
            <div class="add_user">
                @if (!empty($errors->all()))
                <div class="errors">
                    @foreach ($errors->all() as $error)
                    {{ $error }} <br>
                    @endforeach
                </div>
                @endif
                
                <form id="form" method="POST" action="/login">
                    @csrf
                    <div>
                        <label for="first_name"> E-mail </label> <br>
                        <small></small>
                        <input type="text" id="email" name="email" placeholder="example@gmail.com">
                    </div>
                    
                    <div>
                        <label for="last_name"> Password </label>
                        <br>
                        <small></small>
                        <input type="password" id="password" name="password" placeholder="Password">
                    </div>
                    
                    <input class="btn_primary" type="submit" value="Log In">
                </form>
                <a href="/registration">Registration</a>
            </div>
        </div>
    </div>
  

</body>
</html>
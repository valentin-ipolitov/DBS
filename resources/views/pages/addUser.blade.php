@extends('layouts.app')

@push('scripts')
    <script src="{{ asset('js/validation.js') }}" defer></script>
@endpush

@section('content')

    <div class="form_wrap">
        <div class="add_user">
            @if (!empty($errors->all()))
            <div class="errors">
                @foreach ($errors->all() as $error)
                {{ $error }} <br>
                @endforeach
            </div>
            @endif
            
            <form id="form" method="POST" action="/addUser">
                @csrf
                <div>
                    <label for="first_name"> First name </label> <br>
                    <small></small>
                    <input type="text" id="first_name" name="first_name" placeholder="First Name">
                </div>
                
                <div>
                    <label for="last_name"> Last name </label>
                    <br>
                    <small></small>
                    <input type="text" id="last_name" name="last_name" placeholder="Last Name">
                </div>
                
                <div>
                    <label for="email"> Email </label><br>
                    <small></small>
                    <input type="text" id="email" name="email" placeholder="example@gmail.com">
                </div>
                
                <div>
                    <label for="email"> Password </label><br>
                    <small></small>
                    <input type="password" id="password" name="password" placeholder="Password">
                </div>
                
                <div>
                    <label for="birth_date"> Birth date </label><br>
                    <small></small> <br>
                    <input type="date" id="birth_date" name="birth_date"> <br>
                </div>
                
                <div>
                    <label for="gender" id="gender"> Gender </label> <br>
                    <small></small><br>
                    
                    <input type="radio" id="male" name="gender" value="male"> <label for="male">Male</label> <br>
                    <input type="radio" id="female" name="gender" value="female">  <label for="female">Female</label> <br>
                </div>
                
                <input class="btn_primary" type="submit" value="submit">
            </form>
        </div>
        <a class="btn_primary" href="/users"> Check all users </a>
    </div>
@endsection
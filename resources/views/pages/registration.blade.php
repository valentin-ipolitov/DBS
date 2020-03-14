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
            
            <form id="form" method="POST" action="/registration">
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
                
                <input class="btn_primary" type="submit" value="Registrate Me">
            </form>
        </div>
    </div>
@endsection
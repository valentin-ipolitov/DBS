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
@endsection
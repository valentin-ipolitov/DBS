@extends('layouts.app')


@section('content')
    <div class="main-page">
        <p class="welcome">
            {{ session('user')->name }} <br>
            Welcome to our system!
        </p>
    </div>
@endsection
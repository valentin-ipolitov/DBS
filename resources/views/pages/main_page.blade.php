@extends('layouts.app')

@section('sidebar-bottom-content')
    <a href="#" >
        <div class="btn_primary btn_blue btn_100">
            Start to be employee
        </div>
    </a>
@endsection

@section('content')
    <div class="main-page">
        <p class="welcome">
            {{ session('user')->name }} <br>
            Welcome to our system!
        </p>
    </div>
@endsection
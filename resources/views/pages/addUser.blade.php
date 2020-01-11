@extends('layouts.app')


@section('content')
    <div class="add_user">
        <form action="">
            <label for="first_name"> First name </label>
            <input type="text" id="first_name" name="first_name" placeholder="First Name">

            <label for="last_name"> Last name </label>
            <input type="text" id="last_name" name="last_name" placeholder="Last Name">

            <label for="email"> Email </label>
            <input type="text" id="email" name="email" placeholder="example@gmail.com">


            <label for="birth_date"> Birth date </label>
            <input type="date" id="birth_date" name="birth_date"> <br>

            <label for="gender"> Gender </label> <br>
            
            <input type="radio" id="male" name="gender" value="male"> <label for="male">Male</label> <br>
            <input type="radio"id="female" name="gender" value="female">  <label for="female">Female</label> <br>

            <input class="btn_primary" type="submit" value="submit">
        </form>
    </div>
@endsection
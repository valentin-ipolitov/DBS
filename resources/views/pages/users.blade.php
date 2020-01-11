@extends('layouts.app')


@section('content')
    <div class="users">
        <h1>Users table: </h1> 
        <table>
            <tr>
                <th> Name </th>
                <th> E-mail </th>
                <th> Birth date </th>
                <th> Gender </th>
            </tr>
            @foreach ($users as $user)
                <tr>
                    <td> {{ $user->name }} </td>
                    <td> {{ $user->email }} </td>
                    <td> {{ $user->birtDate }} </td>
                    <td> {{ $user->gender }} </td>
                </tr>
            @endforeach
        </table>
    </div>
@endsection
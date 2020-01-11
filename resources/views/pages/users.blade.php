@extends('layouts.app')


@section('content')
    <div class="users">
        <h1>Users table:</h1>
        <table>
            <thead>
                <tr>
                    <th> Name </th>
                    <th> E-mail </th>
                    <th> Birth date </th>
                    <th> Gender </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                <tr>
                    <td data-label="name"> {{ $user->name }} </td>
                    <td data-label="email"> {{ $user->email }} </td>
                    <td data-label="birth_date"> {{ $user->birthDate }} </td>
                    <td data-label="gender"> {{ $user->gender }} </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
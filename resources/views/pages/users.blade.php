@extends('layouts.app')


@section('content')
    <div class="users">
        @if (count($users) > 0 )
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
        @else
            No users in database!
        @endif
        <a class="btn_primary" href="/addUser"> Add new User </a>
        <div>
            {{$users->links()}}
        </div>
    </div>
@endsection
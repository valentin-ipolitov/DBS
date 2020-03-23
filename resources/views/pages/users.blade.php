@extends('layouts.app')

@section('sidebar-content')
 
@endsection

@section('content')
    <div class="users">
        @if (count($users) > 0 )
            <h1>Users table:</h1>
            <table>
                <thead>
                    <tr>
                        <th> Name </th>
                        <th> E-mail </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $user)
                    <tr>
                        <td data-label="name"> {{ $user->name }} </td>
                        <td data-label="email"> {{ $user->email }} </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        @else
            No users in database!
        @endif
        <div class="links links-users">
            {{$users->links()}}
        </div>
    </div>
@endsection
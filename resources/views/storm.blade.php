@extends('layouts.app')

@section('content')


<table class="table table-hover">

    <thead>

        <th>ID</th>

        <th>Name</th>

        <th>Emp#</th>

        <th>AODA</th>

        <th>WHMIS</th>

    </thead>

    <tbody>

        @foreach($users as $user)

        <tr>

            <td>{{$user->id}} </td>

            <td>{{$user->name}} </td>

            <td>{{$user->email}} </td>

            <td>{{$user->aoda}} </td>

            <td>{{$user->whmis}} </td>


        </tr>
        @endforeach

    </tbody>

</table>
@endsection
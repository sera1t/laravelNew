@extends('template')

@section('title')User {{$user->name}}@endsection

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-4 col-md-offset-4 mt-2" >
            <h4>Welcome aliens profile)</h4>
            <hr>
            <table class="table">
                <thead>
                <th>Name</th>
                <th>Email</th>
                </thead>
                <tbody>
                <tr>
                    <td>{{$user->name}}</td>
                    <td>{{$user->email}}</td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
    <a href="{{ route('user-all') }}">View all user</a>
</div>
</body>
@endsection


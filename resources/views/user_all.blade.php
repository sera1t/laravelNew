@extends('template')

@section('title')List user @endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4 mt-2" >
                <h4>Welcome to the club Body)</h4>
                <hr>
                <table class="table">
                    <thead>
                    <th>Name</th>
                    <th>Email</th>
                    </thead>
                    <tbody>
                    @foreach($user_name as $users)
                        <tr>

                            <td><a href="{{ route('profileUser', ['email' => $users->email]) }}">{{$users->name}}</a></td>
                            <td>{{$users->email}}</td>
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>
        <a href="{{ route('dashboard') }}">Go to dashdoard!</a>
    </div>
@endsection


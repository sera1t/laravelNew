@extends('template')

@section('title'){{$data->name}} @endsection

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-4 col-md-offset-4 mt-2" >
            <h4>Welcome to the secret shop)</h4>
            <hr>
            <table class="table">
                <thead>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Action</th>
                </thead>
                <tbody>
                    <tr>
                        <td>{{$data->name}}</td>
                        <td>{{$data->email}}</td>
                        <td><a href="logout">LogOut</a></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
</body>
@endsection

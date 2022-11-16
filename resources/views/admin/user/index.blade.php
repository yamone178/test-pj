
@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card my-3">

                    <div class="card-body">

                        <table class="table ">
                            <thead>
                                <tr>
                                    <td>name</td>
                                    <td>email</td>
                                    <td>phone</td>
                                    <td>password</td>
                                </tr>
                            </thead>

                            <tbody>
                                @foreach($users as $user)
                                    <tr>
                                        <td>{{$user->name}}</td>
                                        <td>{{$user->email}}</td>
                                        <td>{{$user->phone}}</td>
                                        <td>password</td>
                                    </tr>

                                @endforeach
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

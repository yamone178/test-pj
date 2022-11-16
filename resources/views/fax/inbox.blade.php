@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card my-3">

                    <div class="card-body">

                        <table class="table">
                            <thead>
                                <tr>
                                    <th>sender</th>
                                    <th>sender fax-no</th>
                                    <th>sender email</th>
                                    <th>data</th>
                                </tr>
                            </thead>

                            <tbody>
                                @foreach($notis as $noti)

{{--                                    {{$noti}}--}}
                                    <tr>
                                        <td>{{$noti->user->name}}</td>
                                        <td>{{$noti->from}}</td>
                                        <td>{{$noti->user->email}}</td>
                                        <td>
                                            @foreach($noti->files as $file)

                                                <p class="badge bg-secondary">{{$file->name}}</p>

                                            @endforeach
                                        </td>
                                        <td></td>
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

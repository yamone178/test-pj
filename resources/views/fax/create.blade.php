@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card my-3">

                    <div class="card-body">

                        <form action="{{route('fax.store')}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <input type="number" name="from" value="{{\Illuminate\Support\Facades\Auth::user()->phone}}" >
                            <input type="number" name="to" >
                            <input type="file" name="attachFiles[]" class="" multiple>
                            <button>Send</button>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

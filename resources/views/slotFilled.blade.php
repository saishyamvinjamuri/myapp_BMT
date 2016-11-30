@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Dashboard</div>

                    <div class="panel-body">
                        OOPS !! Someone is already ahead in the race .. <br> <br>
                        Click <a href= {{ url('/book/create') }}>here</a> to capture other slot !!
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
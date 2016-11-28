
@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading"><h3>Just a click away to relax</h3></div>
                    <div class="panel-body">

                        {!! Form::open(array('route' => 'book.store')) !!}
                            {{ Form::label('bookedon', 'Date :') }}
                            {{ Form::date('bookedon', 'Select date', array('class' => 'form-control', 'id' => 'book_date')) }}
                            <br>
                            {{ Form::label('bookedfrom', 'Time :') }}
                            {{ Form::time('bookedfrom', 'Select time', array('class' => 'form-control', 'id' => 'book_time')) }}
                            <br>
                            {{ Form::submit('Submit', array('class' => 'btn btn-success')) }} &nbsp; &nbsp;
                            {{ Form::reset('Reset', array('class' => 'btn btn-danger')) }}
                        {!! Form::close() !!}

                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
    </script>
@endsection
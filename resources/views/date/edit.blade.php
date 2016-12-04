
@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading"><h3>Just a click away to disturb or make users happy</h3></div>
                    <div class="panel-body">

                        {!! Form::model($control, array('route' => array('date.destroy', $control->id), 'method'=>'DELETE')) !!}
                        {{ Form::label('disableon', 'Date :') }}
                        {{ Form::date('disableon', $control->disableOn, array('class' => 'form-control', 'id' => 'book_date')) }} <br>

                        {{ Form::radio('action', 'Enable', array('class' => 'radio')) }}
                        {{ Form::label('action', 'Enable') }}&nbsp; &nbsp;
                        {{ Form::radio('action', 'Disable', array('class' => 'radio')) }}
                        {{ Form::label('action', 'Disable') }}
                        <br><br>

                        {{ Form::submit('Update', array('class' => 'btn btn-info btn-sm')) }} &nbsp; &nbsp;
                        {{ Form::reset('Reset', array('class' => 'btn btn-danger')) }}
                        {!! Form::close() !!} <br>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        /* <!-- , array('route' => array('book.destroy', $slot->id), 'method'=>'DELETE', 'class' => 'btn btn-info btn-sm' )) }}
         */
    </script>
@endsection
@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading"><h3>Select a date to disturb people from relaxing</h3></div>
                    <div class="panel-body">

                        {!! Form::open(array('route' => 'date.store')) !!}
                        {{ Form::label('disableon', 'Date :') }}
                        {{ Form::date('disableon', 'mm/dd/yyyy', array('class' => 'form-control', 'id' => 'date')) }} <br>
                        {{ Form::radio('action', 'Enable', array('class' => 'radio')) }}
                        {{ Form::label('action', 'Enable') }}&nbsp; &nbsp;
                        {{ Form::radio('action', 'Disable', array('class' => 'radio')) }}
                        {{ Form::label('action', 'Disable') }}
                        <br/> <br>
                        {{ Form::submit('Submit', array('class' => 'btn btn-success')) }} &nbsp; &nbsp;
                        {{ Form::reset('Reset', array('class' => 'btn btn-danger')) }}
                        {!! Form::close() !!}

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
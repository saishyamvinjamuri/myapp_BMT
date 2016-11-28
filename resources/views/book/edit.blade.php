
@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading"><h3>Just a click away to re-schedule your massage</h3></div>
                    <div class="panel-body">

                        {!! Form::model($slot, array('route' => array('book.update', $slot->id), 'method'=>'PUT')) !!}
                        {{ Form::label('bookedon', 'Date :') }}
                        {{ Form::date('bookedon', $slot->bookedon, array('class' => 'form-control', 'id' => 'book_date')) }}
                        <br>
                        {{ Form::label('bookedfrom', 'Time :') }}
                        {{ Form::time('bookedfrom', $slot->bookedfrom, array('class' => 'form-control', 'id' => 'book_time')) }}
                        <br>
                        {{ Form::submit('Update', array('class' => 'btn btn-info btn-sm')) }} &nbsp;
                        {!! Form::close() !!} <br>
                        {!! Form::open(array('route' => array('book.destroy', $slot->id), 'method'=>'DELETE') ) !!}
                        {{ Form::submit('Delete', array('class' => 'btn btn-danger btn-sm'))}}
                        {!! Form::close() !!}
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
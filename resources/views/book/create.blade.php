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
                            {{ Form::date('bookedon', 'mm/dd/yyyy', array('class' => 'form-control', 'id' => 'date')) }}
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.6/moment.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.37/js/bootstrap-datetimepicker.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $(function () {
                $('#date').datetimepicker();
            });
        });
    </script>
@endsection
@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading"><h3>Chair is waiting to see you at</h3></div>

                    <div class="panel-body">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <td>Id</td>
                                    <td>Booked On</td>
                                    <td>Booked From</td>
                                    <td>Booked Till</td>
                                    <td> </td>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>{{ $slot->id }}</td>
                                    <td>{{ $slot->bookedon }}</td>
                                    <td>{{ $slot->bookedfrom }}</td>
                                    <td>{{ $slot->bookedtill }}</td>
                                    <td><a href = {{ route('book.create') }} class="btn btn-success btn-sm"><span class="glyphicon glyphicon-plus"></span></a>&nbsp;
                                        <a href = {{ route('book.edit', $slot->id) }} class="btn btn-info btn-sm"> <span class="glyphicon glyphicon-pencil"></span> </a> &nbsp;
                                        <a href = {{ route('book.edit', $slot->id) }} class="btn btn-danger btn-sm"> <span class="glyphicon glyphicon-trash"></span> </a> </span>
                                    </td>
                                    {{--{!! Form::open(['route'=>['book.destroy', '$slot->id'], 'method'=>'DELETE']) !!}
                                    {!! Form::submit('Delete', ['class'=>'btn btn-danger btn-sm']) !!}
                                    {!! Form::close() !!} </td>--}}
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
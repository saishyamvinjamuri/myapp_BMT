@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading"><h3>You disturbed the user on</h3></div>

                    <div class="panel-body">
                        <table class="table table-hover">
                            <thead>
                            <tr>
                                <td>Id</td>
                                <td>Disabled On</td>
                                <td> </td>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>{{ $control->id }}</td>
                                <td>{{ $control->disableOn }}</td>
                                <td><a href = {{ route('date.create') }} class="btn btn-success btn-sm"><span class="glyphicon glyphicon-plus"></span></a>&nbsp;
                                    <a href = {{ route('date.edit', $control->id) }} class="btn btn-info btn-sm"> <span class="glyphicon glyphicon-pencil"></span> </a> &nbsp;
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
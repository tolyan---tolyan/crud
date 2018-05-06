@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Task</div>
                    <div class="panel-body">

                        @if(Session::has('message'))
                            <div class="alert alert-success"> {{ Session::get('message') }} </div>
                        @endif

                        <label for="name" class="col-md-4 control-label">Task</label>
                        <br>
                        <br>




                        <table class="table table-striped">
                            <thead>
                            <tr>
                                <th scope="col">№</th>
                                <th scope="col">title</th>
                                <th scope="col">body</th>
                                <th scope="col">edit</th>
                                <th scope="col">delete</th>

                            </tr>
                            </thead>
                            <tbody>
                            @foreach($tasks as $task)


                                <tr>
                                    <th scope="row">{{$task->id}}</th>
                                    <td>{{$task->title}}</td>
                                    <td>{{$task->body}}</td>
                                    <td>
                                        {{link_to_route('task.edit', 'Edit', [$task->id], ['class'=>'btn btn-primary']) }}
                                    </td>

                                    <td>
                                        {!! Form::open(array('route'=>['task.destroy',$task->id],'method'=>'DELETE')) !!}
                                            {!! Form::button('Delete',['class'=>'btn btn-danger','type'=>'submit']) !!}
                                        {!! Form::close() !!}
                                    </td>
                                </tr>

                            @endforeach
                            </tbody>
                        </table>
                        {{link_to_route('task.create', 'Add new Task', null, ['class'=>'btn btn-success']) }}


                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

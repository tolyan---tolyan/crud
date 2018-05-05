@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Task</div>
                    <div class="panel-body">
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
                                    <td>edit</td>
                                    <td>delete</td>
                                </tr>

                            @endforeach
                            </tbody>
                        </table>
                        <button type="button" class="btn btn-success">Add new task</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Task</div>
                    <div class="panel-body">
                        <label for="name" class="col-md-4 control-label">Add new Task</label>
                        <br>
                        <br>


                        {!! Form::open(array('route' => 'task.store')) !!}

                            <div class = "form-group">
                                {!! Form::label('Title','Enter title') !!}
                                {!! Form::text('title', null, ['class' => 'form-control']) !!}
                            </div>

                            <div class = "form-group">
                                {!! Form::label('Body','Enter body') !!}
                                {!! Form::textarea('body', null, ['class' => 'form-control']) !!}
                            </div>

                            <div class = "form-group">
                                {!! Form::button('Create', ['type' => 'submit', 'class' => 'btn btn-success']) !!}
                            </div>

                        {!! Form::close() !!}

                    </div>

                    @if ( count( $errors ) > 0 )
                        <ul class = "aler alert-danger">
                            @foreach($errors->all() as $error)
                                <li>{{ $error }} </li>
                            @endforeach
                        </ul>
                    @endif

                </div>
            </div>
        </div>
    </div>
@endsection

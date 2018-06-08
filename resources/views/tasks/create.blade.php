@extends('layouts.app')

@section('content')

    <h1>New Post tasklist</h1>
    
    
<div class="row">
        <div class="col-xs-6">
   {!! Form::model($task, ['route' => 'tasks.store']) !!}
            
                <div class="form-group">
                    {!! Form::label('status', 'Status:') !!}
                    {!! Form::text('status', null, ['class' => 'form-control']) !!}
                </div>
                    
                <div class="form-group">
                    {!! Form::label('content', 'Task:') !!}
                    {!! Form::text('content', null, ['class' => 'form-control']) !!}
                </div>
                
                {!! Form::submit('投稿', ['class' => 'btn btn-primary']) !!}
        
            {!! Form::close() !!}
            </div>
    </div>
@endsection
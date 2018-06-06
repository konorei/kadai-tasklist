@extends('layouts.app')

@section('content')

    <h1>id = {{ $task->id }} のTask List</h1>
    
    <p>{{ $task->status}}</p>
    <p>{{ $task->content }}</p>
    
     {!! link_to_route('tasks.edit', 'Task編集', ['id' => $task->id]) !!}
     
     {!! Form::model($task, ['route' => ['tasks.destroy', $task->id], 'method' => 'delete']) !!}
        {!! Form::submit('削除') !!}
    {!! Form::close() !!}

@endsection
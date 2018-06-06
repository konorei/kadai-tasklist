@extends('layouts.app')

@section('content')

    <h1>Task List</h1>

   @foreach ($tasks as $task)
                <li>{!! link_to_route('tasks.show', $task->id, ['id' => $task->id]) !!} : {{$task->status}}--{{ $task->content }}</li>
   @endforeach
            
            {!! link_to_route('tasks.create', 'NEW Task') !!}

@endsection

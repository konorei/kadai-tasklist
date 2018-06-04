@extends('layouts.app')

@section('content')

    <h1>New Post tasklist</h1>

    {!! Form::model($task, ['route' => 'tasks.store']) !!}

        {!! Form::label('content', 'task:') !!}
        {!! Form::text('content') !!}

        {!! Form::submit('Post') !!}

    {!! Form::close() !!}

@endsection
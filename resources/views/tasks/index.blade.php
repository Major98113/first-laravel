@extends('layout')
@section('content')
    @foreach($tasks as $task)
        <div>{{$task->body}}</div>
    @endforeach
@endsection


@extends('layouts.app')

@section('title','Projects App')




@section('content')

        <h1>Hero we go again!!!</h1>

        <ul>
        @foreach ($tasks as $task)
            <li>{{ $task }}</li>
        @endforeach
        </ul>

        {{ $foo }}

@endsection



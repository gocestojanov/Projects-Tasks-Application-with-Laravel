@extends('layout')

@section('title','Show Project {{ $project->id }}')

@section('content')

<div class="container">
        <div class="notification">
                <h1>Show Project {{ $project->id }}</h1>
        </div>

        <div class="title">{{ $project->title }}</div>

        <p class="subtitle">{{ $project->description }}</p>

        <div>
            <ul class="content">
            @foreach ($project->tasks as $task)
                <li>{{ $task->description }}</li>
            @endforeach
            </ul>
        </div>

        <div><a href="/projects/{{ $project->id }}/edit">Edit this Project</a></div>
</div>

@endsection

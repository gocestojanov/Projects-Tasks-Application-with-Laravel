@extends('layout')

@section('title','Show Project {{ $project->id }}')

@section('content')

<div class="container">
        <div class="notification">
                <h1>Show Project {{ $project->id }}</h1>
        </div>

        <div class="title">{{ $project->title }}</div>

        <p class="subtitle">{{ $project->description }}</p>


        @if ($project->tasks->count())


            <div>

                @foreach ($project->tasks as $task)
                    <div>
                        <form action="/tasks/{{ $task->id }}"  method="POST">
                            @csrf
                                @method('patch')
                                <label class="checkbox {{ $task->completed ? 'is_completed' : ''}}" for="completed">
                                        <input type="checkbox" name="completed" onchange="this.form.submit()"
                                        {{ $task->completed ? 'checked' : ''}}>
                                        {{ $task->description }}
                                      </label>
                        </form>

                    </div>
                @endforeach

            </div>


        @endif

        <div><a href="/projects/{{ $project->id }}/edit">Edit this Project</a></div>
</div>

@endsection

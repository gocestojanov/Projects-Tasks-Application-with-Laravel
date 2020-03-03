@extends('layout')

@section('title','Show Project {{ $project->id }}')

@section('content')

<div class="container">
        <div class="notification">
                <h1>Show Project {{ $project->id }}</h1>
        </div>

        <div><a href="/projects/{{ $project->id }}/edit">Edit this Project</a></div>
        <div class="title">{{ $project->title }}</div>

        <p class="subtitle">{{ $project->description }}</p>



    @if ($project->tasks->count())
        <div class='box'>
            @foreach ($project->tasks as $task)
                <form action="/tasks/{{ $task->id }}"  method="POST">
                    @csrf
                        @method('patch')
                        <label class="checkbox {{ $task->completed ? 'is_completed' : ''}}" for="completed{{ $task->id }}">
                            <input type="checkbox" name="completed" id="completed{{ $task->id }}" onchange="this.form.submit()"  {{ $task->completed ? 'checked' : ''}}>
                            {{ $task->description }}
                        </label>
                </form>
            @endforeach
        </div>
    @endif




        <form action="/projects/{{ $project->id }}/tasks"  method="POST" class="box">
            @csrf


            {{--

            <div class="control">
                <input type="checkbox" name="completed" id="" placeholder="Task is completed" class="input" value="{{ old('completed') }}">

            </div>

            <label class="checkbox {{ $task->completed ? 'is_completed' : ''}}" for="completed">
                    <input type="checkbox" name="completed" onchange="this.form.submit()"
                    {{ $task->completed ? 'checked' : ''}}>
                    {{ $task->description }}
                  </label>
            comment --}}

            <div class="control">
                <textarea name="description" id="" cols="20" rows="5"
                placeholder="Task Description" class="textarea {{ $errors->has('description') ? 'is-danger' : '' }}" >{{ old('description') }}</textarea>

            </div>

            <div class="field">
                {{-- <input type="submit" value="Create Project"> --}}
                <div class="control" style="margin-top: 10px;">

                    <button type="submit" class="button is-link">Create Task</button>

                </div>
            </div>



            @include('errors')
        </form>

</div>

@endsection

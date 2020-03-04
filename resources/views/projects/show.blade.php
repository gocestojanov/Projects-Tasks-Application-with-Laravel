@extends('layouts.app')

@section('title','Show Project {{ $project->id }}')

@section('content')

<div class="container">



        <nav class="breadcrumb is-small" aria-label="breadcrumbs">
            <ul>
                <li>
                    <span class="icon is-small" style="color: Dodgerblue;">
                      <i class="fas fa-home" aria-hidden="true"></i>
                    </span>
                    <a href="/" >Home</a>
                </li>
                <li class="is-active"><a href="#">Show Project {{ $project->id }}: {{ $project->title }}</a></li>
                <li><a href="/about">About</a></li>
                <li><a href="/contact" aria-current="page">Contact</a></li>
            </ul>
        </nav>


        <nav class="level">
            <div class="level-left">
                <h1 class="title">{{ $project->title }}</h1>
            </div>
            <div class="level-right">

                <a class="button" href="/projects/{{ $project->id }}/edit">Edit this Project</a>
            </div>
        </nav>

        <h2 class="subtitle">{{ $project->description }}</h2>



    @if ($project->tasks->count())
        <div class='box'>
            @foreach ($project->tasks as $task)

            <nav class="level">
                <div class="level-left">
                    <form action="/tasks/{{ $task->id }}"  method="POST">
                            @csrf
                            @method('patch')
                            <label class="checkbox {{ $task->completed ? 'is_completed' : ''}}" for="completed{{ $task->id }}">
                                <input type="checkbox" name="completed" id="completed{{ $task->id }}" onchange="this.form.submit()"  {{ $task->completed ? 'checked' : ''}}>
                                {{ Str::limit($task->description,150) }}
                            </label>
                    </form>
                 </div>

                <div class="level-right">
                 <form action="/tasks/{{ $task->id }}" method="POST">
                        @csrf
                        @method('delete')
                        <div class="control">
                            <input  class="button is-primary" type="button" name="delete" id="delete" onclick="this.form.submit()" value="delete">
                        </div>
                </form>
                 </div>
            </nav>

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

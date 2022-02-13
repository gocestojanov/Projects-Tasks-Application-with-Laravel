@extends('layouts.app')

@section('title','Show Project {{ $project->id }}')

@section('content')

<div class="container">

    @component('projects.verticalmenu')



    <nav class="breadcrumb is-small" aria-label="breadcrumbs">
        <ul>
            <li>
                <span class="icon is-small" style="color: Dodgerblue;">
                    <i class="fas fa-home" aria-hidden="true"></i>
                </span>
                <a href="/home">Home</a>
            </li>
            <li class="is-active"><a href="#">Project: {{ $project->title }}</a></li>
        </ul>
    </nav>



    <div class="box">
        <article class="media">
            <div class="media-left">
                <figure class="image is-64x64 is-square">
                    <img src="{{ asset('simages/images/' . $project->image )}}" alt="Image" height="64" width="64">
                </figure>
            </div>
            <div class="media-content">
                <div class="content">
                    <p>
                        <strong>{{ $project->title }}</strong>
                        <small> Created By {{ $project->owner->name }} </small>
                        <small style="font-style: italic; color: indianred;">on {{ $project->created_at->format('d M Y')
                            }}</small>
                        <br>
                        {{ $project->description }}
                        <br>
                        <small>
                            @isset($project->statusname)
                            <progress class="progress is-primary" value="15" max="100">15%</progress>
                            <span class="tag is-primary is-light">Status: {{ $project->statusname->name }}</span>
                            @endisset


                        </small>
                    </p>
                </div>
            </div>
            <div class="media-right">
                <a class="button" href="/projects/{{ $project->id }}/edit">Edit this Project</a>
            </div>

        </article>
    </div>


    @if ($project->tasks->count())

    @foreach ($project->tasks as $task)
    <div class='box'>
        <div class="columns">
            <div class="column is-11">
                <form action="/tasks/{{ $task->id }}" method="POST">
                    @csrf
                    @method('patch')
                    <label class="checkbox {{ $task->completed ? 'is_completed' : ''}}" for="completed{{ $task->id }}">
                        <div class="content">
                            <input type="checkbox" name="completed" id="completed{{ $task->id }}"
                                onchange="this.form.submit()" {{ $task->completed ? 'checked' : ''}}>
                            <span class="is-size-8 has-text-weight-normal"
                                style="{{ $task->completed ? 'text-decoration: line-through;' : ''}}">{{
                                $task->description }}</span>
                        </div>

                    </label>
                </form>
            </div>

            <div class="column">
                <form action="/tasks/{{ $task->id }}" method="POST">
                    @csrf
                    @method('delete')
                    <div class="control">
                        <input class="button is-primary" type="button" name="delete" id="delete"
                            onclick="this.form.submit()" value="delete">
                    </div>
                </form>
            </div>
        </div>
    </div>
    @endforeach

    @endif


    <h1 class="title is-4">Define new Task for this project</h1>

    <form action="/projects/{{ $project->id }}/tasks" method="POST" class="box">
        @csrf


        {{--

        <div class="control">
            <input type="checkbox" name="completed" id="" placeholder="Task is completed" class="input"
                value="{{ old('completed') }}">

        </div>

        <label class="checkbox {{ $task->completed ? 'is_completed' : ''}}" for="completed">
            <input type="checkbox" name="completed" onchange="this.form.submit()" {{ $task->completed ? 'checked' :
            ''}}>
            {{ $task->description }}
        </label>
        comment --}}

        <div class="control">
            <textarea name="description" cols="20" rows="5" placeholder="Task Description"
                class="textarea {{ $errors->has('description') ? 'is-danger' : '' }}">{{ old('description') }}</textarea>

        </div>

        <div class="field">
            {{-- <input type="submit" value="Create Project"> --}}
            <div class="control" style="margin-top: 10px;">

                <button type="submit" class="button is-link">Create Task</button>

            </div>
        </div>



        @include('errors')
    </form>

    @endcomponent

</div>

@endsection

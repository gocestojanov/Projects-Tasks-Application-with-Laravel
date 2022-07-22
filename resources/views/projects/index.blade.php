@extends('layouts.app')

@section('title','Index Project')


@section('content')

@component('projects.verticalmenu')

<div class="columns">
    <div class="column">
        <h1 class="title">Browse Projects</h1>
    </div>
    <div class="column has-text-right">
        <a id="" class="button" href="/projects/create">Create Project</a>
    </div>
</div>




@foreach ($projects as $project)

<div class="box" @if ($project->statusname->name == 'finished') style="background-color: lightgreen" @endif >
    <article class="media">
        <div class="media-left">
            <figure class="image is-64x64 is-square">
                <img src="{{ asset('simages/images/' . $project->image )}}" alt="Image" height="64" width="64">
            </figure>
        </div>
        <div class="media-content">
            <div class="content">
                <p>
                    <strong><a href="/projects/{{$project->id}}">{{ $project->title }}</a> </strong>
                    <small> Created By {{ $project->owner->name }} </small>
                    <small style="font-style: italic; color:darkgray;">on {{ $project->created_at->format('d M Y')
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
                    <small>Last updated by {{ $project->owner->name }} </small>
                    <small style="font-style: italic; color: rgb(128, 10, 75);">on {{ $project->updated_at->format('d M Y')
                        }}</small>
                </p>
            </div>
        </div>
    </article>
</div>
@endforeach

@if ( session('message'))
<p>{{ session('message') }}</p>
@endif
@endcomponent


@endsection

@extends('layouts.app')

@section('title','Index Project')


@section('content')

    @component('projects.verticalmenu')
            <h1>Projects</h1>


            <ul>
                @foreach ($projects as $project)
                <li><a href="/projects/{{$project->id}}">{{ $project->title }}</a> {{ $project->description }}</li>
                @endforeach
            </ul>


            @if ( session('message'))
                <p>{{ session('message') }}</p>
            @endif
    @endcomponent


@endsection


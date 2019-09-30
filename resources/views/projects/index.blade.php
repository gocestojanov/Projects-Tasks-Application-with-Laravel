@extends('layout')

@section('title','Index Project')


@section('content')

    <h1>Projects</h1>


    <ul>
    @foreach ($projects as $project)
    <li><a href="/projects/{{$project->id}}">{{ $project->title }}</a> {{ $project->description }}</li>
    @endforeach
    </ul>

@endsection


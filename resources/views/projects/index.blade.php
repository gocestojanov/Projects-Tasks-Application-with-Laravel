@extends('layouts.app')

@section('title','Index Project')


@section('content')

    @component('projects.verticalmenu')

            <h1 class="title">Browse Projects</h1>

            @foreach ($projects as $project)
            <div class="box">
                <article class="media">
                  <div class="media-left">
                    <figure class="image is-64x64 is-square">
                      <img src="{{ asset('simages/' . $project->image )}}"  alt="Image" height="64" width="64">
                    </figure>
                  </div>
                  <div class="media-content">
                    <div class="content">
                      <p>
                        <strong><a href="/projects/{{$project->id}}">{{ $project->title }}</a> </strong>
                        <small> Created By {{ $project->owner->name }} </small>
                        <small style="font-style: italic; color: indianred;">on {{ $project->created_at->format('d M Y') }}</small>
                        <br>
                        {{ $project->description }}
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


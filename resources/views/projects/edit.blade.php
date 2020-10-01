@extends('layouts.app')

@section('title','Edit Project')


@section('content')

<div class="container">

    @component('projects.verticalmenu')


        <div class="columns">
            <div class="column">
                <h1 class="title">Edit Project</h1>
            </div>

            <div class="column">

            </div>
            <div class="column">

            </div>


            <div class="column has-text-right">
                <form action="/projects/{{ $project->id }}" method="POST">
                    @method('delete')
                    @csrf

                    <div class="field">
                        <button type="submit" class="button">Delete this Project</button>
                    </div>
                </form>
            </div>
        </div>


    <div class="field">
        <label for="title" class="label">Project Image</label>

        <img src="{{ asset('simages/' . $project->image )}}" alt="Image" height="64" width="64">

    </div>

    <form action="/projects/{{ $project->id }}" method="post" enctype="multipart/form-data">

        @method('patch')
        @csrf

        <div class="field">
            <label for="title" class="label">Title</label>

            <div class="control">
                <input type="text" name="title" id="" class="input" placeholder="Title" value="{{ $project->title }}">
            </div>

        </div>

        <div class="field">
            <label for="status" class="label">Status</label>



            <div class="select">
                <select id="status" name="status">

                  @foreach ($projectstatus as $status)
                       <option value="{{ $status->id }}"  @if ($project->statusname->name == $status->name) selected='selected' @endif >{{ $status->name }}</option>
                  @endforeach

                </select>
              </div>

        </div>

        <div class="field">
            <label for="description" class="label">Description</label>

            <div class="">
                <textarea class="textarea" name="description" id="" cols="30" rows="10"
                    placeholder="Description">{{ $project->description }}</textarea>
            </div>
        </div>


        <div id="file-js-example" class="file has-name">
            <label class="file-label">
                <input class="file-input" type="file" name="image">
                <span class="file-cta">
                    <span class="file-icon">
                        <i class="fas fa-upload"></i>
                    </span>
                    <span class="file-label">
                        Change project image…
                    </span>
                </span>
                <span class="file-name">
                    No file uploaded
                </span>
            </label>
        </div>

        <br>

        <div class="field ">
            <button type="submit" class="button is-link">Update Project</button>
        </div>

        @include('errors')

    </form>





    @endcomponent



</div>
@endsection

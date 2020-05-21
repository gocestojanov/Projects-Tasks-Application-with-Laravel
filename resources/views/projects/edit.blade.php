@extends('layouts.app')

@section('title','Edit Project')


@section('content')

<div class="container">

@component('projects.verticalmenu')
<div class="notification">

    <div class="columns">
        <div class="column">
            <h1 class="title is-6">Edit Project</h1>
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






</div>




<form action="/projects/{{ $project->id }}" method="post">

    @method('patch')
    @csrf

    <div class="field">
            <label for="title" class="label">Title</label>

            <div class="control">
                    <input type="text" name="title" id="" class="input" placeholder="Title" value="{{ $project->title }}" >

            </div>
    </div>

    <div class="field">
            <label for="description" class="label">Description</label>

            <div class="">
                <textarea class="textarea"name="description" id="" cols="30" rows="10" placeholder="Description" >{{ $project->description }}</textarea>
            </div>
    </div>


    <div class="field ">
            <button type="submit" class="button is-link">Update Project</button>
    </div>


</form>





@endcomponent



</div>
@endsection



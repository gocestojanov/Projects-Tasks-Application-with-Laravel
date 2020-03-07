@extends('layouts.app')

@section('title','Edit Project')


@section('content')

<div class="container">
    <div class="notification">
        <h1 class="title">Edit Project</h1>
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

    <form action="/projects/{{ $project->id }}" method="POST">
        @method('delete')
        @csrf

        <div class="field ">
                <button type="submit" class="button">Delete this Project</button>
        </div>
    </form>


</div>
@endsection



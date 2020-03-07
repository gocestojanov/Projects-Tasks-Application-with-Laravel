@extends('layouts.app')

@section('title','Create Project')

@section('content')

<div class="container">
        <div class="notification">
                <h1>Create new Project</h1>
        </div>



    <form action="/projects" method="POST">
        @csrf


        <div class="control">
            <input type="text" name="title" id="" placeholder="Project Title" class="input" value="{{ old('title') }}">
        </div>

        <div class="control">
            <textarea name="description" id="" cols="30" rows="10"
            placeholder="project Description" class="textarea {{ $errors->has('description') ? 'is-danger' : '' }}" >{{ old('description') }}</textarea>

        </div>

        <div class="field">
            {{-- <input type="submit" value="Create Project"> --}}

            <button type="submit" class="button is-link">Create Project</button>
        </div>



        @include('errors')
    </form>

</div>
@endsection

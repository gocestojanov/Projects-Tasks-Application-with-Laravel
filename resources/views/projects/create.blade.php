@extends('layout')

@section('title','Create Project')
    
@section('content')
    
    <h1>Create new Project</h1>

    <form action="/projects" method="POST">
        @csrf


        <div>
            <input type="text" name="title" id="" placeholder="Project Title">
            
        </div>

        <div>
            <textarea name="description" id="" cols="30" rows="10" placeholder="project Description"></textarea>
            
        </div>    

        <div>
            <input type="submit" value="Create Project">
        </div>
    
    </form>


@endsection

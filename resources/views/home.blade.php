@extends('layouts.app')





@section('content')



        @component('projects.verticalmenu')
            You are logged in! <br>
            {{ Auth::user()->name }}
        @endcomponent




@endsection

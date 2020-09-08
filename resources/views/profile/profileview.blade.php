@extends('layouts.app')

@section('title', 'User Profile')

@section('content')

    @component('projects.verticalmenu')

        <h1 class="title">User Profile</h1>

        {{ auth()->user()->name }}
        <br>
        {{ auth()->user()->email }}
        <br>




        <figure class="image is-128x128">
            <img src="{{ asset('simages/') .  '/images/' . auth()->user()->image }}" alt="" height="50" width="50">
        </figure>

        <br>

        <a class="button" href="/profile/edit" >
            <span class="icon is-small">
                <i class="fas fa-user-edit"></i>
            </span>
            <span>Change Profile</span>
        </a>


        @if ( session('message'))
            <p>{{ session('message') }}</p>
        @endif
    @endcomponent


@endsection

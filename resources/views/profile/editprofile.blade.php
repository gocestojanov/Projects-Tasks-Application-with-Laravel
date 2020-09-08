@extends('layouts.app')

@section('title', 'Edit Your Profile')

@section('content')

    @component('projects.verticalmenu')


        <h1 class="title">Edit User Profile</h1>

        <form action="/profile" method="POST" enctype="multipart/form-data">
            @method('patch')
            @csrf


            <div class="field">
                <label for="name" class="label">Name</label>

                <div class="control">
                    <input type="text" name="name" id="name" class="input" placeholder="Name" value="{{ auth()->user()->name }}">
                </div>
            </div>

            <div class="field">
                <label for="email" class="label">Email</label>

                <div class="control">
                    <input type="text" name="email" id="email" class="input" placeholder="Email" value="{{ auth()->user()->email }}">
                </div>
            </div>

            <img src="{{ auth()->user()->image }}" alt="" height="50" width="50">
            <figure class="image is-128x128">
                <img src="{{ asset('simages' . '/images/' .auth()->user()->image )}}" alt="Image" height="64" width="64">

            </figure>

            <br>

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
                <button type="submit" class="button is-link">Update User Profile</button>
            </div>


            @include('errors')


        </form>

    @endcomponent

@endsection

@extends('layouts.app')

@section('title','About')




@section('content')

    <div class="content">
        <div class="columns">
        <div class="column is-one-fifth"></div>
        <div class="column">
            <h1 class="title">About</h1>
            <p> <strong>Project VS Tasks</strong> Web Application is made for a testing purpose with Laravel PHP Framework & Bulma, open source CSS framework</p>

            <h1 class="subtitle is-4">Everything that is used in this Application</h1>
            <h2 class="subtitle is-4">Laravel</h2>
            <ul>
                <li> <strong>Localization:</strong>  Path: resources/lang. Retrieving Translation Strings Example:  __('auth.Register'), where auth is file in lang folder. </li>
                <li> <strong>Blade: Components & Slots</strong>   - verticalmenu after login is component { $slot }</li>
            </ul>



            <h2 class="subtitle is-4">Frontend</h2>
            <ul>
                <li> <strong>Bulma CSS Framework:</strong>  <a href="https://bulma.io/" target="_blank">https://bulma.io/</a>  Included into header section.</li>
                <li> <strong>Fontawesome icons:</strong>  Include into header section. Using: <i class="fas fa-user"></i></li>
            </ul>

        </div>
        <div class="column is-one-fifth"></div>
        </div>
    </div>

@endsection

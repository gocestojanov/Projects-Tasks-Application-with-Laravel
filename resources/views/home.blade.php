@extends('layouts.app')





@section('content')



        @component('projects.verticalmenu')

            <h1 class="title">Welcome!</h1>
            <h1 class="subtitle is-6">You are logged in!</h1> <br>

            <article class="media">
                <figure class="media-left">
                  <p class="image is-64x64">
                    <img src="{{ asset('simages/') .  '/images/' . auth()->user()->image }}" alt="" height="50" width="50">
                  </p>
                </figure>
                <div class="media-content">
                  <div class="content">
                    <p>
                      <strong>{{ Auth::user()->name }}</strong> <small> {{ Auth::user()->email }} </small> <small style="color: darkgray">31m</small>
                      <br>
                       Congratulations you have <span style="color:cornflowerblue "><i class="fas fa-tasks"></i> {{ $number_of_projects }} </span> <a href="/projects">Projects</a>  on your list!
                    </p>
                  </div>

                  {{-- <nav class="level is-mobile">
                    <div class="level-left">
                      <a class="level-item">
                        <span class="icon is-small"><i class="fas fa-reply"></i></span>
                      </a>
                      <a class="level-item">
                        <span class="icon is-small"><i class="fas fa-retweet"></i></span>
                      </a>
                      <a class="level-item">
                        <span class="icon is-small"><i class="fas fa-heart"></i></span>
                      </a>
                    </div>
                  </nav> --}}
                </div>
                <div class="media-right">
                  <button class="delete"></button>
                </div>
              </article>


        @endcomponent




@endsection

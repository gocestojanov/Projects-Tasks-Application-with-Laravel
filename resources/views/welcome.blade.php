@extends('layouts.app')

@section('title','Project Tasks App')




@section('content')
     <div class="content">
        <div class="columns">
        <div class="column is-one-fifth"></div>
        <div class="column">

            <section class="hero is-success is-fullheight">
                <div class="hero-body">
                  <div class="container">
                    <h1 class="title">
                      Projects & Tasks
                    </h1>
                    <h2 class="subtitle">
                      Easy create Unlimited Projects with Unlimited Tasks
                    </h2>

                    <div class="columns">
                        <div class="column" >
                            <figure class="image is-256x256">
                                <img class="is-rounded" src="images/tasks.jpg">
                            </figure>
                        </div>
                        <div class="column" style="align-self: baseline;">
                            <figure class="image is-128x128">
                                <img class="is-rounded" src="images/task1.jpg">
                            </figure>
                        </div>
                        <div class="column">
                            <figure class="image is-64x64">
                                <img class="is-rounded" src="images/task2.jpg">
                            </figure>
                        </div>
                      </div>




                  </div>
                </div>
              </section>

        </div>
        <div class="column is-one-fifth"></div>
        </div>
    </div>


@endsection



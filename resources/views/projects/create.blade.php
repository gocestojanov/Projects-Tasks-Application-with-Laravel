@extends('layouts.app')

@section('title','Create Project')

@section('content')

<div class="container">

@component('projects.verticalmenu')

            <h1 class="title">Create new Project</h1>




        <form action="/projects" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="control">
                <input type="text" name="title" id="" placeholder="Project Title" class="input" value="{{ old('title') }}">
            </div>

            <br>

            <div class="control">
                <textarea name="description" id="" cols="30" rows="10"
                            placeholder="project Description"
                            class="textarea {{ $errors->has('description') ? 'is-danger' : '' }}" >
                            {{ old('description') }}
                </textarea>
            </div>

            <br>

            <div id="file-js-example" class="file has-name">
                <label class="file-label">
                  <input class="file-input" type="file" name="image">
                  <span class="file-cta">
                    <span class="file-icon">
                      <i class="fas fa-upload"></i>
                    </span>
                    <span class="file-label">
                      Upload project image…
                    </span>
                  </span>
                  <span class="file-name">
                    No file uploaded
                  </span>
                </label>
              </div>

              {{-- <script>
                const fileInput = document.querySelector('#file-js-example input[type=file]');
                fileInput.onchange = () => {
                  if (fileInput.files.length > 0) {
                    const fileName = document.querySelector('#file-js-example .file-name');
                    fileName.textContent = fileInput.files[0].name;
                  }
                }
              </script> --}}


            <br>

            <div class="field">
                <button type="submit" class="button is-link">Create Project</button>
            </div>


            @include('errors')
        </form>

@endcomponent


</div>
@endsection

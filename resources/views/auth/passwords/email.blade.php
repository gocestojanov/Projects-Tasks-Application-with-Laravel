@extends('layouts.app')

@section('content')
<div class="container">

    <div class="columns">
        <div class="column is-one-third"></div>
        <div class="column is-one-third">
            <div class="box">

                <div class="title">{{ __('Reset Password') }}</div>

                <div class="form">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="POST" action="{{ route('password.email') }}">
                        @csrf

                        <div class="form">
                            <label for="email" class="label">{{ __('E-Mail Address') }}</label>

                            <div class="control">
                                <input id="email" type="email" class="input  @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form">
                            <div class="control">
                                <button type="submit" class="button is-link" style="margin-top: 20px;">
                                    {{ __('Send Password Reset Link') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>

            </div>
        </div>
        <div class="column is-one-third"></div>
    </div>

</div>
@endsection

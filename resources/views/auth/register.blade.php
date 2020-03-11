@extends('layouts.app')

@section('content')
<div class="container">

    <div class="columns">
        <div class="column is-one-third"></div>
        <div class="column is-one-third">
            <div class="box">

            <div class="title">{{ __('Register') }}</div>

                <div class="form">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="">
                            <label for="name" class="label">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="input @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form">
                            <label for="email" class="label">{{ __('E-Mail Address') }}</label>

                            <div class="control">
                                <input id="email" type="email" class="input @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form">
                            <label for="password" class="label">{{ __('Password') }}</label>

                            <div class="control">
                                <input id="password" type="password" class="input @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form">
                            <label for="password-confirm" class="label">{{ __('Confirm Password') }}</label>

                            <div class="control">
                                <input id="password-confirm" type="password" class="input" name="password_confirmation" required autocomplete="new-password">
                            </div>

                            <label for="password-confirm" class="label">{{ __(' ') }}</label>
                            <button type="submit" class="button is-link is-fullwidth">
                                <span class="icon is-large">
                                    <i class="fas fa-sign-in-alt" style="padding-right:20px;"></i>
                                </span>
                                {{ __('Register') }}
                            </button>

                        </div>



                    </form>
                </div>

            </div>
        </div>
        <div class="column is-one-third"></div>
    </div>

</div>
@endsection

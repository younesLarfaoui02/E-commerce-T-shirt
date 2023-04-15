@extends('front.layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 ">
                <div class="container ">
                    <div class="my-5 text-center fs-1" style="color: #F8A629 ; font-family:'Lato', sans-serif;'" >{{__('Login ')}}</div>
                    <form method="POST" action="{{ route('login') }}" >
                        @csrf
                        <div class="row mb-3">
                            <label for="email"
                                class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email"
                                    class="form-control  @if($errors->any()) is-invalid @endif" name="email"
                                    value="{{ old('email') }}" required autocomplete="email" autofocus>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password"
                                    class="form-control @if($errors->any()) is-invalid @endif" name="password" required
                                    autocomplete="current-password">
                            </div>

                        </div>
                        @if ($errors->any())
                            <div class="row mb-3 justify-content-end">
                                
                                <div class="col-md-6">
                                    <div class="alert alert-danger w-7 m-auto pt-3">
                                        <span>{{ __('Email or Password Incorrect !') }}</span>
                                    </div>
                                </div>

                            </div>
                        @endif


                        <div class="row mb-3">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember"
                                        {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-success">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a style="color : #2FAB72" class="fs-6  px-5" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
@endsection

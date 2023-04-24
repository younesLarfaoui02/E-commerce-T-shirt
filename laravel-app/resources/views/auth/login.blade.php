@extends('front.layouts.app')

@section('content')
        <div class="row justify-content-evenly border">
        <div class="col-lg-5 col-md-12 col-12 ">
            <div class="my-5 text-center fs-1" style="color: #5A5C69 ; font-family:'Lato', sans-serif;'" >{{__('Register ')}}</div>
            <form   method="POST" action="{{ route('register') }}" class="p-4">
                @csrf
                <div class="row mb-3">
                    <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>

                    <div class="col-md-6">
                        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                        @error('name')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                    <div class="col-md-6">
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                        @error('email')
                        <span class="invalid-feedback" role="alert">
                                             <strong>{{ $message }}</strong>
                                             </span>
                        @enderror
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                    <div class="col-md-6">
                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                        @error('password')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>

                    <div class="col-md-6">
                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                    </div>
                </div>

                <div class="row mb-0 justify-content-center">
                    <div class="col-md-6">
                        <button type="submit" class="btn btn-primary">
                            {{ __('Register') }}
                        </button>
                    </div>
                </div>
            </form>
        </div>
        <div class="col-lg-5 col-md-12 col-12 align-self-center ">
                <div class="my-5 text-center fs-1" style="color: #5A5C69 ; font-family:'Lato', sans-serif;'" >{{__('Login ')}}</div>
                <form method="POST" action="{{ route('login') }}" class="p-4" >
                    @csrf
                    <div class="row mb-3">
                        <label for="email"
                               class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                        <div class="col-md-6">
                            <input id="email" type="email"
                                   class="form-control  @error('email_login') is-invalid @enderror" name="email_login"
                                   value="{{ old('email') }}" required autocomplete="email" autofocus>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                        <div class="col-md-6">
                            <input id="password" type="password"
                                   class="form-control @error('password_login') is-invalid @enderror" name="password_login" required
                                   autocomplete="current-password">
                        </div>

                    </div>
                    @if($errors->any())
                        <div class="row mb-3 justify-content-end">

                            <div class="col-md-8">
                                <div class="alert alert-danger w-7 m-auto pt-3">
                                    <span>{{ __('Email or Password Incorrect !') }}</span>
                                </div>
                            </div>

                        </div>
                    @endif
{{--                    @php--}}
{{--                    --}}
{{--                    if(!isset($_GET['email']) ){--}}
{{--                        echo "hhhhhh" . $_GET['email'];--}}
{{--                    };--}}

{{--                    @endphp--}}
                    <div class="row mb-0 ">
                        <div class="col-md-12 text-center">
                            <button type="submit" class="btn">
                                {{ __('Login') }}
                            </button>
                            <div class="row mb-3 pt-4 text-brand">
                                @if (Route::has('password.request'))
                                    <a style="color : #5A5C69" class="fs-6  px-5" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif

                            </div>
                            <div class="row mb-3 justify-content-center  ">

                            </div>
                        </div>
                    </div>
                </form >
            </div>
        </div>
@endsection

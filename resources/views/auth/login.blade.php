@extends('layouts.app')

@section('content')

<main id="main">
<br>
<section id="contact" class="contact">
    <div class="container" data-aos="fade-up">

        <div class="section-title">
            <h2>Login</h2>      
        </div>

        <div class="row">

           <div class="col-lg-2">&nbsp;</div>

            <div class="col-lg-8 mt-5 mt-lg-0 d-flex align-items-stretch">
                <form action="{{ route('login') }}" method="post" role="form" class="basic-form">
                    @csrf
                    <div class="form-row">


                        <label for="name">{{ __('E-Mail Address') }}</label>
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus data-msg="Please enter a valid email">

                        @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                        <div class="validate"></div>

                    </div>
                    <div class="form-group">
                        <label for="name">{{ __('Password') }}</label>
                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" data-msg="Please enter password">

                        @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                        <div class="validate"></div>
                    </div>
                    <div class="form-group">
                        <label for="name">{{ __('Remember Me') }}</label>
                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }} style="margin-left: 5px;">

                      
                        <div class="validate"></div>
                    </div>
                    <div class="text-center"><button type="submit"> {{ __('Login') }}</button></div>
                    @if (Route::has('password.request'))
                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    {{ __('Forgot Your Password?') }}
                                </a>
                                @endif
                </form>
            </div>
           <div class="col-lg-2">&nbsp;</div>

        </div>

    </div>
</section><!-- End Contact Section -->
</main>

@endsection

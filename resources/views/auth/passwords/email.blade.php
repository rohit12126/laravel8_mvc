@extends('layouts.app')

@section('content')

<main id="main">
<br>
<section id="contact" class="contact">
    <div class="container" data-aos="fade-up">

        <div class="section-title">
            <h2>{{ __('Reset Password') }}</h2>      
        </div>

        <div class="row">

           <div class="col-lg-2">&nbsp;</div>

            <div class="col-lg-8 mt-5 mt-lg-0 d-flex align-items-stretch">
                <form action="{{ route('password.email') }}" method="post" role="form" class="basic-form">
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
                    <br>
                    <div class="text-center"><button type="submit">{{ __('Send Password Reset Link') }}</button></div>
                    
                </form>
            </div>
           <div class="col-lg-2">&nbsp;</div>

        </div>

    </div>
</section><!-- End Contact Section -->
</main>

@endsection
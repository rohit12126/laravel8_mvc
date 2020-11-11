@extends('layouts.app')

@section('content')

<main id="main">
    <br>
    <section id="contact" class="contact">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>Profile</h2>
            </div>

            @if(Session::get('alert-success'))
            <div class="alert alert-success alert-dismissible fade show col-8 mar-left-16" role="alert">
                <strong>Success!</strong> {{Session::get('alert-success')}}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            @elseIf((Session::get('alert-error')))
            <div class="alert alert-danger alert-dismissible fade show col-8 mar-left-16" role="alert">
                <strong>Failed!</strong> {{Session::get('alert-error')}}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            @endIf
            <div class="row">

                <div class="col-lg-2">&nbsp;</div>

                <div class="col-lg-8 mt-5 mt-lg-0 d-flex align-items-stretch">
                    <form action="{{ route('update.profile') }}" method="post" role="form" class="basic-form">
                        @csrf
                        <div class="form-row">
                            <label for="name">{{ __('E-Mail Address') }}</label>
                            <p> <strong>{{ Auth::user()->email }}</strong></p>
                        </div>
                        <div class="form-row">
                            <label for="name">{{ __('Name') }}</label>
                            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" autocomplete="name" autofocus value="@if(old('name')){{ old('name') }}@else{{ Auth::user()->name }}@endif">
                            @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                            <div class="validate"></div>
                        </div>
                        <div class="form-group">
                            <label for="name">{{ __('Mobile Number') }}</label>
                            <input id="mobile" type="number" class="form-control @error('mobile') is-invalid @enderror" name="mobile" autocomplete="mobile" data-msg="Please enter mobile number" min="0" value="@if(old('mobile')){{ old('mobile') }}@else{{ Auth::user()->mobile }}@endif">

                            @error('mobile')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                            <div class="validate"></div>
                        </div>

                        <div class="form-group">
                            <label for="address">{{ __('Address') }}</label>
                            <textarea class="form-control @error('address') is-invalid @enderror" name="address" autocomplete="address" data-msg="Please enter address">@if(old('address')){{ old('address') }}@else{{ Auth::user()->address }}@endif</textarea>

                            @error('address')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                            <div class="validate"></div>
                        </div>

                        <div class="text-center"><button type="submit"> {{ __('Submit') }}</button></div>


                    </form>
                </div>
                <div class="col-lg-2">&nbsp;</div>

            </div>

        </div>
    </section><!-- End Contact Section -->
</main>

@endsection

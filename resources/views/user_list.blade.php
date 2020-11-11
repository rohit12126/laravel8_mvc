@extends('layouts.app')

@section('content')

<main id="main">
    <br>
    <section id="contact" class="contact">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>{{ __('User List') }}</h2>
            </div>

            <div class="row">

                <div class="col-lg-2">&nbsp;</div>

                <div class="col-lg-8 mt-5 mt-lg-0 d-flex align-items-stretch">
                    @if(Session::get('alert-success'))
                    <p>{{Session::get('alert-success')}}</p>
                    @elseIf((Session::get('alert-error')))
                    <p>{{Session::get('alert-error')}}</p>
                    @endIf

                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">{{ __('Name') }}</th>
                                <th scope="col">{{ __('Email') }}</th>
                                <th scope="col">{{ __('Mobile') }}</th>
                                <th scope="col">{{ __('Address') }}</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($user_list as $key => $value)
                            
                            <tr>
                                <th scope="row">{{ $key+1 }}</th>
                                <td>{{ $value->name}}</td>
                                <td>{{ $value->email}}</td>
                                <td>{{ $value->mobile}}</td>
                                <td>{{ $value->address}}</td>
                                
                            </tr>
                        @endforeach
                        </tbody>
                    </table>

                </div>
                <div class="col-lg-2">&nbsp;</div>

            </div>

        </div>
    </section><!-- End Contact Section -->
</main>

@endsection

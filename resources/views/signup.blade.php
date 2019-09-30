@extends('master')

@section('title', 'Signin')

@section('content')
<!-- TOP SEARCH BOX -->
<section>
    <div class="search-top">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="search-form">
                        <form class="tourz-search-form">
                            <div class="input-field">
                                <input type="text" id="select-city" class="autocomplete">
                                <label for="select-city">Enter city</label>
                            </div>
                            <div class="input-field">
                                <input type="text" id="select-search" class="autocomplete">
                                <label for="select-search" class="search-hotel-type">Search over a million tour and travels, sight seeings, hotels and more</label>
                            </div>
                            <div class="input-field">
                                <input type="submit" value="search" class="waves-effect waves-light tourz-sear-btn"> </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- END TOP SEARCH BOX -->
<!--DASHBOARD-->
<section>
    <div class="tr-register">
        <div class="tr-regi-form">
            <h4>Create an Account</h4>
            <p>It's free and always will be.</p>
            <form method="post" action="{{ route('register') }}" class="col s12" id="signupForm">
                @csrf
                <div class="row">
                    <div class="input-field col m6 s12">
                        <input type="text" class="validate" name="first_name" value="{{ $errors->register->first('first_name') }}">
                        <label>First Name</label>
                        @if ($errors->has('first_name'))
                        <div class="error">{{ $errors->first('first_name') }}</div>
                        @endif
                    </div>
                    <div class="input-field col m6 s12">
                        <input type="text" class="validate" name="last_name" value="{{ $errors->register->first('last_name') }}">
                        <label>Last Name</label>
                        @if ($errors->has('last_name'))
                        <div class="error">{{ $errors->first('last_name') }}</div>
                        @endif
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <input type="number" class="validate" name="mobile_no" value="{{ $errors->register->first('mobile_no') }}">
                        <label>Mobile</label>
                        @if ($errors->has('mobile_no'))
                        <div class="error">{{ $errors->first('mobile_no') }}</div>
                        @endif
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <input type="email" class="validate" name="email" value="{{ $errors->register->first('email') }}">
                        <label>Email</label>
                        @if ($errors->has('email'))
                        <div class="error">{{ $errors->first('email') }}</div>
                        @endif
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <input type="password" class="validate" name="password" id="password">
                        <label>Password</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <input type="password" class="validate" name="confirm_password">
                        <label>Confirm Password</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <input type="submit" value="submit" class="waves-effect waves-light btn-large full-btn"> </div>
                </div>
            </form>
            <p>Are you a already member ? <a href="{{url('/signin')}}">Click to Login</a>
            </p>
        </div>
    </div>
</section>
<!--END DASHBOARD-->

@stop
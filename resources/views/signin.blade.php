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
            <h4>Sign In</h4>
            <p>It's free and always will be.</p>
            <form class="col s12" id="signinForm" action="{{ route('login') }}" method="post">
                @csrf
                <div class="row">
                    <div class="input-field col s12">
                        <input type="email" class="validate" name="email" value="{{ $errors->login->first('email') }}">
                        <label>Email</label>
                        @if ($errors->has('email'))
                        <div class="error">{{ $errors->first('email') }}</div>
                        @endif
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <input type="password" class="validate" name="password">
                        <label>Password</label>
                        @if ($errors->has('password'))
                        <div class="error">{{ $errors->first('password') }}</div>
                        @endif
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <input type="submit" value="submit" class="waves-effect waves-light btn-large full-btn">
                    </div>
                </div>
            </form>
            <p><a href="{{url('/forgot-password')}}">Forgot password</a> | Are you a new user ? <a href="{{url('/signup')}}">Register</a>
            </p>
            <div class="soc-login">
                <h4>Sign in using</h4>
                <ul>
                    <li><a href="#"><i class="fa fa-facebook fb1"></i> Facebook</a> </li>
                    <li><a href="#"><i class="fa fa-twitter tw1"></i> Twitter</a> </li>
                    <li><a href="#"><i class="fa fa-google-plus gp1"></i> Google</a> </li>
                </ul>
            </div>
        </div>
    </div>
</section>
<!--END DASHBOARD-->

@stop
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>The Travel - @yield('title')</title>
        <!--== META TAGS ==-->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <!-- FAV ICON -->
        <link rel="shortcut icon" href="{{asset('public/images/fav.ico')}}">
        <!-- GOOGLE FONTS -->
        <link href="https://fonts.googleapis.com/css?family=Poppins%7CQuicksand:400,500,700" rel="stylesheet">
        <!-- FONT-AWESOME ICON CSS -->
        <link rel="stylesheet" href="{{asset('public/css/font-awesome.min.css')}}">
        <!--== ALL CSS FILES ==-->
        <link rel="stylesheet" href="{{asset('public/css/style.css')}}">
        <link rel="stylesheet" href="{{asset('public/css/materialize.css')}}">
        <link rel="stylesheet" href="{{asset('public/css/bootstrap.css')}}">
        <link rel="stylesheet" href="{{asset('public/css/mob.css')}}">
        <link rel="stylesheet" href="{{asset('public/css/animate.css')}}">
    </head>
    <body>
        <!-- Preloader -->
        <!--        <div id="preloader">
                    <div id="status"></div>
                </div>-->
        <!-- MOBILE MENU -->
        <section>
            <div class="ed-mob-menu">
                <div class="ed-mob-menu-con">
                    <div class="ed-mm-left">
                        <div class="wed-logo">
                            <a href="{{url('/')}}"><img src="{{asset('public/images/logo.png')}}" alt="{{config('app.name')}}"></a>
                        </div>
                    </div>
                    <div class="ed-mm-right">
                        <div class="ed-mm-menu">
                            <a href="#" class="ed-micon"><i class="fa fa-bars"></i></a>
                            <div class="ed-mm-inn">
                                <a href="#" class="ed-mi-close"><i class="fa fa-times"></i></a>
                                <ul>
                                    <li>Home</a></li>
                                    <li><a href="{{url('/packages')}}">Packages</a></li>
                                    <li><a href="{{url('/hotels')}}">Hotels</a></li>
                                    <li><a href="{{url('/events')}}">Events</a></li>
                                    <li><a href="{{url('/contact')}}">Contact us</a></li>
                                </ul>
                                <div class="ed-com-t1-center">
                                    @if(Session::has('user_id'))
                                    <ul>
                                        <li><a href="{{url('/profile')}}">Profile</a></li>
                                        <li><a href="{{route('logout')}}">Logout</a></li>
                                    </ul>
                                    @else
                                    <ul>
                                        <li><a href="{{url('/signin')}}">Sign In</a></li>
                                        <li><a href="{{url('/signup')}}">Sign Up</a></li>
                                    </ul>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--HEADER SECTION-->
        <section>
            <!-- TOP BAR -->
            <div class="ed-top">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="ed-com-t1-left">
                                <ul>
                                    <li><a href="#">Contact: Kolkata, India</a>
                                    </li>
                                    <li><a href="#">Phone: +033-1231-1231</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="ed-com-t1-right">
                                @if(Session::has('user_id'))
                                <ul>
                                    <li><a href="{{url('/profile')}}">Profile</a></li>
                                    <li><a href="{{route('logout')}}">Logout</a></li>
                                </ul>
                                @else
                                <ul>
                                    <li><a href="{{url('/signin')}}">Sign In</a></li>
                                    <li><a href="{{url('/signup')}}">Sign Up</a></li>
                                </ul>
                                @endif
                            </div>
                            <div class="ed-com-t1-social">
                                <ul>
                                    <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                    </li>
                                    <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
                                    </li>
                                    <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- LOGO AND MENU SECTION -->
            <div class="top-logo" data-spy="affix" data-offset-top="250">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="wed-logo">
                                <a href="{{url('/')}}"><img src="{{asset('public/images/logo.png')}}" alt="" />
                                </a>
                            </div>
                            <div class="main-menu">
                                <ul>
                                    <li class="{{Route::is('home') ? 'active' : '' }}"><a href="{{url('/')}}">Home</a></li>
                                    <li class="{{Route::is('packages') ? 'active' : '' }}"><a href="{{url('/packages')}}">Packages</a></li>
                                    <li class="{{Route::is('hotels') ? 'active' : '' }}"><a href="{{url('/hotels')}}">Hotels</a></li>
                                    <li class="{{Route::is('events') ? 'active' : '' }}"><a href="{{url('/events')}}">Events</a></li>
                                    <li class="{{Route::is('contact') ? 'active' : '' }}"><a href="{{url('/contact')}}">Contact us</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--END HEADER SECTION-->
        <div class="contain-wrap">
            @yield('content')
        </div>
        <!--====== FOOTER 1 ==========-->
        <section>
            <div class="rows">
                <div class="footer1 home_title tb-space">
                    <div class="pla1 container">
                        <!-- FOOTER OFFER 1 -->
                        <div class="col-md-3 col-sm-6 col-xs-12">
                            <div class="disco">
                                <h3>30%<span>OFF</span></h3>
                                <h4>Eiffel Tower,Rome</h4>
                                <p>valid only for 24th Dec</p> <a href="booking.html">Book Now</a> </div>
                        </div>
                        <!-- FOOTER OFFER 2 -->
                        <div class="col-md-3 col-sm-6 col-xs-12">
                            <div class="disco1 disco">
                                <h3>42%<span>OFF</span></h3>
                                <h4>Colosseum,Burj Al Arab</h4>
                                <p>valid only for 18th Nov</p> <a href="booking.html">Book Now</a> </div>
                        </div>
                        <!-- FOOTER MOST POPULAR VACATIONS -->
                        <div class="col-md-6 col-sm-12 col-xs-12 foot-spec footer_places">
                            <h4><span>Most Popular</span> Vacations</h4>
                            <ul>
                                <li><a href="tour-details.html">Angkor Wat</a> </li>
                                <li><a href="tour-details.html">Buckingham Palace</a> </li>
                                <li><a href="tour-details.html">High Line</a> </li>
                                <li><a href="tour-details.html">Sagrada Família</a> </li>
                                <li><a href="tour-details.html">Statue of Liberty </a> </li>
                                <li><a href="tour-details.html">Notre Dame de Paris</a> </li>
                                <li><a href="tour-details.html">Taj Mahal</a> </li>
                                <li><a href="tour-details.html">The Louvre</a> </li>
                                <li><a href="tour-details.html">Tate Modern, London</a> </li>
                                <li><a href="tour-details.html">Gothic Quarter</a> </li>
                                <li><a href="tour-details.html">Table Mountain</a> </li>
                                <li><a href="tour-details.html">Bayon</a> </li>
                                <li><a href="tour-details.html">Great Wall of China</a> </li>
                                <li><a href="tour-details.html">Hermitage Museum</a> </li>
                                <li><a href="tour-details.html">Yellowstone</a> </li>
                                <li><a href="tour-details.html">Musée d'Orsay</a> </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--====== FOOTER 2 ==========-->
        <section>
            <div class="rows">
                <div class="footer">
                    <div class="container">
                        <div class="foot-sec2">
                            <div>
                                <div class="row">
                                    <div class="col-sm-3 foot-spec foot-com">
                                        <h4><span>Holiday</span> Tour & Travels</h4>
                                        <p>World's leading tour and travels Booking website,Over 30,000 packages worldwide.</p>
                                    </div>
                                    <div class="col-sm-3 foot-spec foot-com">
                                        <h4><span>Address</span> & Contact Info</h4>
                                        <p>28800 Orchard Lake Road, Suite 180 Farmington Hills, U.S.A. Landmark : Next To Airport</p>
                                        <p> <span class="strong">Phone: </span> <span class="highlighted">+101-1231-1231</span> </p>
                                    </div>
                                    <div class="col-sm-3 col-md-3 foot-spec foot-com">
                                        <h4><span>SUPPORT</span> & HELP</h4>
                                        <ul class="two-columns">
                                            <li> <a href="#">About Us</a> </li>
                                            <li> <a href="#">FAQ</a> </li>
                                            <li> <a href="#">Feedbacks</a> </li>
                                            <li> <a href="#">Blog </a> </li>
                                            <li> <a href="#">Use Cases</a> </li>
                                            <li> <a href="#">Advertise us</a> </li>
                                            <li> <a href="#">Discount</a> </li>
                                            <li> <a href="#">Vacations</a> </li>
                                            <li> <a href="#">Branding Offers </a> </li>
                                            <li> <a href="#">Contact Us</a> </li>
                                        </ul>
                                    </div>
                                    <div class="col-sm-3 foot-social foot-spec foot-com">
                                        <h4><span>Follow</span> with us</h4>
                                        <p>Join the thousands of other There are many variations of passages of Lorem Ipsum available</p>
                                        <ul>
                                            <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a> </li>
                                            <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a> </li>
                                            <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a> </li>
                                            <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a> </li>
                                            <li><a href="#"><i class="fa fa-youtube" aria-hidden="true"></i></a> </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--====== FOOTER - COPYRIGHT ==========-->
        <section>
            <div class="rows copy">
                <div class="container">
                    <p>Copyrights © 2019 The Travel. All Rights Reserved</p>
                </div>
            </div>
        </section>
        <!--========= Scripts ===========-->
        <script src="{{asset('public/js/jquery-latest.min.js')}}"></script>
        <script src="{{asset('public/js/bootstrap.js')}}"></script>
        <script src="{{asset('public/js/wow.min.js')}}"></script>
        <script src="{{asset('public/js/materialize.min.js')}}"></script>
        <script src="{{asset('public/js/jquery.validate.min.js')}}"></script>
        <script src="{{asset('public/js/custom.js')}}"></script>
    </body>
</html>
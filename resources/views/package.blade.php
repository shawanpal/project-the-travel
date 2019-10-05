@extends('master')
@section('title', 'Package Details')
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
                                <ul class="autocomplete-content dropdown-content"></ul></div>
                            <div class="input-field">
                                <input type="text" id="select-search" class="autocomplete">
                                <label for="select-search" class="search-hotel-type">Search over a million tour and travels, sight seeings, hotels and more</label>
                                <ul class="autocomplete-content dropdown-content"></ul></div>
                            <div class="input-field">
                                <i class="waves-effect waves-light tourz-sear-btn waves-input-wrapper" style=""><input type="submit" value="search" class="waves-button-input"></i> </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- END TOP SEARCH BOX -->
<!--====== BANNER ==========-->
<section>
    <div class="rows inner_banner" style="background: url({{asset('public/images/package_banner.jpg')}}) no-repeat center center;">
        <div class="container">
            <h2><span>All Packages -</span> Top Packages In The World</h2>
            <ul>
                <li><a href="{{Route('home')}}">Home</a></li>
                <li><i class="fa fa-angle-right" aria-hidden="true"></i> </li>
                <li><a class="bread-acti">All Packages</a></li>
            </ul>
            <p>Book travel packages and enjoy your holidays with distinctive experience</p>
        </div>
    </div>
</section>
<!--====== PLACES ==========-->
<section>
    <div class="rows inn-page-bg com-colo">
        <div class="container inn-page-con-bg tb-space pad-bot-redu-5" id="inner-page-title">
            <!-- TITLE & DESCRIPTION -->
            <div class="spe-title col-md-12">
                <h2>Top <span> packages</span> in this Year</h2>
                <div class="title-line">
                    <div class="tl-1"></div>
                    <div class="tl-2"></div>
                    <div class="tl-3"></div>
                </div>
                <p>World's leading tour and travels Booking website,Over 30,000 packages worldwide. Book travel packages and enjoy your holidays with distinctive experience</p>
            </div>
            @foreach ($packages as $package)
            <!--===== PLACES ======-->
            @php
            $description = strip_tags($package->description);
            $limit_description = trim(substr($description, 0, 150).'...');
            $rating = ((($package->rating *100)/10)*2);
            @endphp
            <div class="rows p2_2 hot-page2-alp-r-list">
                <div class="col-md-6 col-sm-6 col-xs-12 p2_1">
                    @if($package->offer != '')
                    <div class="band"><img src="{{asset('public/images/'.$package->offer)}}" alt="offer"></div>
                    @endif
                    <img src="{{asset('public/images/package/thumbnail/'.$package->thumbnail)}}" alt="{{$package->title}}" />
                </div>
                <div class="col-md-6 col-sm-6 col-xs-12 p2">
                    <h3>{{$package->title}}  
                        <span class="tour_star">
                            <div class="star-ratings-sprite">
                                <span style="width:{{$rating}}%" class="star-ratings-sprite-rating"></span>
                            </div>
                        </span>
                    </h3>
                    <p>{{$limit_description}}</p>
                    <div class="trav-ami">
                        <h4>Detail and Includes</h4>
                        <ul>
                            <li><img src="{{asset('public/images/icon/a17.png')}}" alt="package"> <span>{{$package->package_category}}</span></li>
                            <li><img src="{{asset('public/images/icon/a18.png')}}" alt="duration"> <span>{{$package->duration_nights}} Nights/{{$package->duration_days}} Days</span></li>
                            <li><img src="{{asset('public/images/icon/a19.png')}}" alt="location"> <span>{{$package->location}}</span></li>
                        </ul>
                    </div>
                    <div class="p2_book">
                        <ul>
                            <li><a href="{{Route('booking')}}" class="link-btn">Book Now</a> </li>
                            <li><a href="{{url('packages/'.$package->alias)}}" class="link-btn">View Package</a> </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!--===== PLACES END ======-->
            @endforeach
        </div>
    </div>
</section>
@stop
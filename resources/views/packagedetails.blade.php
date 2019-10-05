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
    <div class="rows inner_banner" style="background: url({{asset('public/images/package/banner/'.$package_details->cover)}}) no-repeat center center;">
        <div class="container">
            <h2><span>{{$package_details->title}} -</span> {{$package_category->name}}</h2>
            <ul>
                <li><a href="{{Route('home')}}">Home</a></li>
                <li><i class="fa fa-angle-right" aria-hidden="true"></i> </li>
                <li><a href="{{Route('package')}}">Packages</a></li>
                <li><i class="fa fa-angle-right" aria-hidden="true"></i> </li>
                <li><a class="bread-acti"></a>{{$package_details->title}}</li>
            </ul>
            <p>Book travel packages and enjoy your holidays with distinctive experience</p>
        </div>
    </div>
</section>
<!--====== TOUR DETAILS - BOOKING ==========-->
<section>
    <div class="rows banner_book" id="inner-page-title">
        <div class="container">
            <div class="banner_book_1">
                <ul>
                    <li class="dl1">Location : {{$package_details->location}}</li>
                    <li class="dl2">Price : ${{$package_details->price}}</li>
                    <li class="dl3">Duration : {{$package_details->duration_nights}} Nights / {{$package_details->duration_days}} Days</li>
                    <li class="dl4"><a href="{{Route('booking')}}">Book Now</a> </li>
                </ul>
            </div>
        </div>
    </div>
</section>
<!--====== TOUR DETAILS ==========-->
<section>
    <div class="rows inn-page-bg com-colo">
        <div class="container inn-page-con-bg tb-space">
            <div class="col-md-9">
                <!--====== TOUR TITLE ==========-->
                <div class="tour_head">
                    @php
                        $rating = ((($package_details->rating *100)/10)*2);
                    @endphp
                    <h2>{{$package_details->title}}
                        <span class="tour_star">
                            <div class="star-ratings-sprite">
                                <span style="width:{{$rating}}%" class="star-ratings-sprite-rating"></span>
                            </div>
                        </span>
                        <span class="tour_rat">{{$package_details->rating}}</span>
                    </h2>
                </div>
                <!--====== TOUR DESCRIPTION ==========-->
                <div class="tour_head1">
                    <h3>Description</h3>
                    @php echo $package_details->description; @endphp
                </div>
                <!--====== ROOMS: HOTEL BOOKING ==========-->
                <div class="tour_head1 hotel-book-room">
                    <h3>Photo Gallery</h3>
                    <div id="myCarousel1" class="carousel slide" data-ride="carousel">
                        <!-- Indicators -->
                        <ol class="carousel-indicators carousel-indicators-1">
                            @foreach($images as $k => $image)
                            <li data-target="#myCarousel1" data-slide-to="{{$k}}"><img src="{{asset('public/images/gallery/'.$image->pic_name)}}" alt="Package Gallery">
                            </li>
                            @endforeach
                        </ol>
                        <!-- Wrapper for slides -->
                        <div class="carousel-inner carousel-inner1" role="listbox">
                            @foreach($images as $k => $image)
                                @if($k == 0)
                                    <div class="item active"> <img src="{{asset('public/images/gallery/'.$image->pic_name)}}" alt="Package Gallery" width="460" height="345"> </div>
                                @else
                                    <div class="item"> <img src="{{asset('public/images/gallery/'.$image->pic_name)}}" alt="Package Gallery" width="460" height="345"> </div>
                                @endif
                            @endforeach
                        </div>
                        <!-- Left and right controls -->
                        <a class="left carousel-control" href="#myCarousel1" role="button" data-slide="prev"> <span><i class="fa fa-angle-left hotel-gal-arr" aria-hidden="true"></i></span> </a>
                        <a class="right carousel-control" href="#myCarousel1" role="button" data-slide="next"> <span><i class="fa fa-angle-right hotel-gal-arr hotel-gal-arr1" aria-hidden="true"></i></span> </a>
                    </div>
                </div>
                <!--====== TOUR LOCATION ==========-->
                <div class="tour_head1 tout-map map-container">
                    <h3>Location</h3>
                    @php echo $package_details->map; @endphp
                </div>
                <!--====== ABOUT THE TOUR ==========-->
                <div class="tour_head1">
                    <h3>About The Tour</h3>
                    <table>
                        <tr>
                            <th>Places covered</th>
                            <th class="event-res">Inclusions</th>
                            <th class="event-res">Exclusions</th>
                            <th>Day(s)</th>
                        </tr>
                        @foreach($abouts as $about)
                        <tr>
                            <td>{{$about->cover_place}}</td>
                            <td class="event-res">{{$about->inclusions}}</td>
                            <td class="event-res">{{$about->exclusions}}</td>
                            <td>{{$about->days}}</td>
                        </tr>
                        @endforeach
                    </table>
                </div>
                <!--====== DURATION ==========-->
                <div class="tour_head1 l-info-pack-days days">
                    <h3>Detailed Day Wise Itinerary</h3>
                    <ul>
                        @foreach($itineraries as $itinerary)
                        <li class="l-info-pack-plac"> <i class="fa fa-clock-o" aria-hidden="true"></i>
                            <h4><span>Day : {{$itinerary->day_no}}</span> {{$itinerary->title}}</h4>
                            <p>{{$itinerary->description}}</p>
                        </li>
                        @endforeach
                    </ul>
                </div>
                <div>
                    <div class="dir-rat">
                        <div class="dir-rat-inn dir-rat-title">
                            <h3>Write Your Rating Here</h3>
                            <p>If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text</p>
                            <fieldset class="rating">
                                <input type="radio" id="star5" name="rating" value="5" />
                                <label class="full" for="star5" title="Awesome - 5 stars"></label>
                                <input type="radio" id="star4half" name="rating" value="4 and a half" />
                                <label class="half" for="star4half" title="Pretty good - 4.5 stars"></label>
                                <input type="radio" id="star4" name="rating" value="4" />
                                <label class="full" for="star4" title="Pretty good - 4 stars"></label>
                                <input type="radio" id="star3half" name="rating" value="3 and a half" />
                                <label class="half" for="star3half" title="Meh - 3.5 stars"></label>
                                <input type="radio" id="star3" name="rating" value="3" />
                                <label class="full" for="star3" title="Meh - 3 stars"></label>
                                <input type="radio" id="star2half" name="rating" value="2 and a half" />
                                <label class="half" for="star2half" title="Kinda bad - 2.5 stars"></label>
                                <input type="radio" id="star2" name="rating" value="2" />
                                <label class="full" for="star2" title="Kinda bad - 2 stars"></label>
                                <input type="radio" id="star1half" name="rating" value="1 and a half" />
                                <label class="half" for="star1half" title="Meh - 1.5 stars"></label>
                                <input type="radio" id="star1" name="rating" value="1" />
                                <label class="full" for="star1" title="Sucks big time - 1 star"></label>
                                <input type="radio" id="starhalf" name="rating" value="half" />
                                <label class="half" for="starhalf" title="Sucks big time - 0.5 stars"></label>
                            </fieldset>
                        </div>
                        <div class="dir-rat-inn">
                            <form class="dir-rat-form">
                                <div class="form-group col-md-6 pad-left-o">
                                    <input type="text" class="form-control" id="email11" placeholder="Enter Name"> </div>
                                <div class="form-group col-md-6 pad-left-o">
                                    <input type="number" class="form-control" id="email12" placeholder="Enter Mobile"> </div>
                                <div class="form-group col-md-6 pad-left-o">
                                    <input type="email" class="form-control" id="email13" placeholder="Enter Email id"> </div>
                                <div class="form-group col-md-6 pad-left-o">
                                    <input type="text" class="form-control" id="email14" placeholder="Enter your City"> </div>
                                <div class="form-group col-md-12 pad-left-o">
                                    <textarea placeholder="Write your message"></textarea>
                                </div>
                                <div class="form-group col-md-12 pad-left-o">
                                    <input type="submit" value="SUBMIT" class="link-btn"> </div>
                            </form>
                        </div>
                        <!--COMMENT RATING-->
                        <div class="dir-rat-inn dir-rat-review">
                            <div class="row">
                                <div class="col-md-3 dir-rat-left"> <img src="images/reviewer/4.jpg" alt="">
                                    <p>Orange Fab & Weld <span>19th January, 2017</span> </p>
                                </div>
                                <div class="col-md-9 dir-rat-right">
                                    <div class="dir-rat-star"> <i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star-o" aria-hidden="true"></i> </div>
                                    <p>Michael & his team have been helping us with our eqiupment finance for the past 5 years - I think that says a quite a lot.. Michael is always ready to go the extra mile, always available, always helpfull that goes the same for his team that work with him - definatley our first phone call.</p>
                                    <ul>
                                        <li><a href="#"><span>Like</span><i class="fa fa-thumbs-o-up" aria-hidden="true"></i></a> </li>
                                        <li><a href="#"><span>Dis-Like</span><i class="fa fa-thumbs-o-down" aria-hidden="true"></i></a> </li>
                                        <li><a href="#"><span>Report</span> <i class="fa fa-flag-o" aria-hidden="true"></i></a> </li>
                                        <li><a href="#"><span>Comments</span> <i class="fa fa-commenting-o" aria-hidden="true"></i></a> </li>
                                        <li><a href="#"><span>Share Now</span>  <i class="fa fa-facebook" aria-hidden="true"></i></a> </li>
                                        <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a> </li>
                                        <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a> </li>
                                        <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a> </li>
                                        <li><a href="#"><i class="fa fa-youtube" aria-hidden="true"></i></a> </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!--COMMENT RATING-->
                        <div class="dir-rat-inn dir-rat-review">
                            <div class="row">
                                <div class="col-md-3 dir-rat-left"> <img src="images/reviewer/3.jpg" alt="">
                                    <p>Orange Fab & Weld <span>19th January, 2017</span> </p>
                                </div>
                                <div class="col-md-9 dir-rat-right">
                                    <div class="dir-rat-star"> <i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star-o" aria-hidden="true"></i> </div>
                                    <p>Michael & his team have been helping us with our eqiupment finance for the past 5 years - I think that says a quite a lot.. Michael is always ready to go the extra mile, always available, always helpfull that goes the same for his team that work with him - definatley our first phone call.</p>
                                    <ul>
                                        <li><a href="#"><span>Like</span><i class="fa fa-thumbs-o-up" aria-hidden="true"></i></a> </li>
                                        <li><a href="#"><span>Dis-Like</span><i class="fa fa-thumbs-o-down" aria-hidden="true"></i></a> </li>
                                        <li><a href="#"><span>Report</span> <i class="fa fa-flag-o" aria-hidden="true"></i></a> </li>
                                        <li><a href="#"><span>Comments</span> <i class="fa fa-commenting-o" aria-hidden="true"></i></a> </li>
                                        <li><a href="#"><span>Share Now</span>  <i class="fa fa-facebook" aria-hidden="true"></i></a> </li>
                                        <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a> </li>
                                        <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a> </li>
                                        <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a> </li>
                                        <li><a href="#"><i class="fa fa-youtube" aria-hidden="true"></i></a> </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!--COMMENT RATING-->
                        <div class="dir-rat-inn dir-rat-review">
                            <div class="row">
                                <div class="col-md-3 dir-rat-left"> <img src="images/reviewer/1.jpg" alt="">
                                    <p>Orange Fab & Weld <span>19th January, 2017</span> </p>
                                </div>
                                <div class="col-md-9 dir-rat-right">
                                    <div class="dir-rat-star"> <i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star-o" aria-hidden="true"></i> </div>
                                    <p>Michael & his team have been helping us with our eqiupment finance for the past 5 years - I think that says a quite a lot.. Michael is always ready to go the extra mile, always available, always helpfull that goes the same for his team that work with him - definatley our first phone call.</p>
                                    <ul>
                                        <li><a href="#"><span>Like</span><i class="fa fa-thumbs-o-up" aria-hidden="true"></i></a> </li>
                                        <li><a href="#"><span>Dis-Like</span><i class="fa fa-thumbs-o-down" aria-hidden="true"></i></a> </li>
                                        <li><a href="#"><span>Report</span> <i class="fa fa-flag-o" aria-hidden="true"></i></a> </li>
                                        <li><a href="#"><span>Comments</span> <i class="fa fa-commenting-o" aria-hidden="true"></i></a> </li>
                                        <li><a href="#"><span>Share Now</span>  <i class="fa fa-facebook" aria-hidden="true"></i></a> </li>
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
            <div class="col-md-3 tour_r">
                <!--====== SPECIAL OFFERS ==========-->
                @if($sale->band != '')
                <div class="tour_right tour_offer">
                    <div class="band1"><img src="{{asset('public/images/'.$sale->offer_band)}}" alt="offer"/></div>
                    <p>Special Offer</p>
                    <h4>${{$package_details->price}}<span class="n-td">
                            @php
                                $percentage = $sale->sale;
                                $total_price = $package_details->price;
                                $sale_price = ($percentage / 100) * $total_price;
                                $regular_price = ($sale_price + $total_price);
                            @endphp
                            <span class="n-td-1">${{$regular_price}}</span>
                        </span>
                    </h4>
                    <a href="{{Route('booking')}}" class="link-btn">Book Now</a>
                </div>
                @endif
                <!--====== TRIP INFORMATION ==========-->
                <div class="tour_right tour_incl tour-ri-com">
                    <h3>Trip Information</h3>
                    <ul>
                        @foreach($informations as $information)
                        <li>{{$information->info}}</li>
                        @endforeach
                    </ul>
                </div>
                <!--====== PACKAGE SHARE ==========-->
                <div class="tour_right head_right tour_social tour-ri-com">
                    <h3>Share This Package</h3>
                    <ul>
                        <li><a href="https://www.facebook.com/"><i class="fa fa-facebook" aria-hidden="true"></i></a> </li>
                        <li><a href="https://www.google.com"><i class="fa fa-google-plus" aria-hidden="true"></i></a> </li>
                        <li><a href="https://twitter.com"><i class="fa fa-twitter" aria-hidden="true"></i></a> </li>
                        <li><a href="https://in.linkedin.com/"><i class="fa fa-linkedin" aria-hidden="true"></i></a> </li>
                        <li><a href="https://web.whatsapp.com/"><i class="fa fa-whatsapp" aria-hidden="true"></i></a> </li>
                    </ul>
                </div>
                <!--====== HELP PACKAGE ==========-->
                <div class="tour_right head_right tour_help tour-ri-com">
                    <h3>Help & Support</h3>
                    <div class="tour_help_1">
                        <h4 class="tour_help_1_call">Call Us Now</h4>
                        <h4><i class="fa fa-phone" aria-hidden="true"></i> {{$contact_info->phone_no}}</h4> </div>
                </div>
                <!--====== PUPULAR TOUR PACKAGES ==========-->
                <div class="tour_right tour_rela tour-ri-com">
                    <h3>Related Packages</h3>
                    @foreach ($related_packages as $related_package)
                        @if($related_package->id != $package_details->id)
                            @if($related_package->id != '')
                            @php $description = strip_tags($related_package->description);
                                 $limit_description = trim(substr($description, 0, 100).'...');
                            @endphp
                                <div class="tour_rela_1">
                                    <img src="{{asset('public/images/package/thumbnail/'.$related_package->thumbnail)}}" alt="" />
                                    <h4>{{$related_package->title}} {{$related_package->duration_nights}} Nights / {{$related_package->duration_days}} Days</h4>
                                    <p>{{$limit_description}}</p>
                                    <a href="{{url('packages/'.$related_package->alias)}}" class="link-btn">View this Package</a>
                                </div> 
                            @else
                                <div class="tour_rela_1">
                                    There are no related products.
                                </div>
                            @endif
                        @endif
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>
@stop
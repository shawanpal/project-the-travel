@extends('master')

@section('title', 'Contact')

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
<!--====== LOCATON ==========-->
<section>
    <div class="rows contact-map map-container">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6290413.804893654!2d-93.99620524741552!3d39.66116578737809!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x880b2d386f6e2619%3A0x7f15825064115956!2sIllinois%2C+USA!5e0!3m2!1sen!2sin!4v1469954001005" allowfullscreen></iframe>
    </div>
</section>
<!--====== QUICK ENQUIRY FORM ==========-->
<section>
    <div class="form form-spac rows con-page">
        <div class="container">
            <!-- TITLE & DESCRIPTION -->
            <div class="spe-title col-md-12">
                <h2><span>Contact us</span></h2>
                <div class="title-line">
                    <div class="tl-1"></div>
                    <div class="tl-2"></div>
                    <div class="tl-3"></div>
                </div>
                <p>World's leading tour and travels Booking website,Over 30,000 packages worldwide. Book travel packages and enjoy your holidays with distinctive experience</p>
            </div>
            <div class="contact-form-wrp">
                <form class="contact_form" id="contactForm" method="post" action="{{}}">
                    <div class="contact-tit">
                        <h3>What's on your mind</h3>
                        <p>Say hello, ask us anything using this contact form and we'll respond within 24 hours.</p>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                            <input type="text" class="validate" name="name">
                            <label class="">Enter full your name</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s6">
                            <input type="number" class="validate" name="phone">
                            <label>Enter your phone</label>
                        </div>
                        <div class="input-field col s6">
                            <input type="email" class="validate" name="email">
                            <label>Enter your email</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                            <input type="text" class="validate" name="subject">
                            <label class="">Enter your subject</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                            <textarea name="message" class="validate"></textarea>
                            <label class="">Enter your message</label>
                        </div>
                    </div>
                    <div class="input-field col s12">
                        <i class="waves-effect waves-light tourz-sear-btn v2-ser-btn waves-input-wrapper" style="">
                            <input type="submit" value="Contact Now" class="waves-button-input">
                        </i>
                    </div>
                </form>
            </div>

            <div class="pg-contact">
                <div class="col-md-3 col-sm-6 col-xs-12 new-con new-con1">
                    <h2>The <span>Travel</span></h2>
                    <p>We Provide Outsourced Software Development Services To Over 50 Clients From 21 Countries.</p>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12 new-con new-con1">
                    <h4>Address</h4>
                    <p>28800 Orchard Lake Road, Suite 180 Farmington Hills, U.S.A.
                        <br>Landmark : Next To Airport</p>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12 new-con new-con3">
                    <h4>CONTACT INFO:</h4>
                    <p> <a href="tel://0099999999" class="contact-icon">Phone: 01 234874 965478</a>
                        <br> <a href="tel://0099999999" class="contact-icon">Mobile: 01 654874 965478</a>
                        <br> <a href="mailto:mytestmail@gmail.com" class="contact-icon">Email: info@company.com</a> </p>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12 new-con new-con4">
                    <h4>Website</h4>
                    <p> <a href="#">Website: www.mycompany.com</a>
                        <br> <a href="#">Facebook: www.facebook/my</a>
                        <br> <a href="#">Blog: www.blog.mycompany.com</a> </p>
                </div>
            </div>

        </div>
    </div>
</section>

@stop
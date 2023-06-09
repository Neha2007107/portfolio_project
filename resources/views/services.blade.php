@extends('layouts.master')
@section ('content')
	<!--================ End Header Area =================-->

    <!--================ Start Banner Area =================-->
    <section class="banner_area">
        <div class="banner_inner d-flex align-items-center">
            <div class="container">
                <div class="banner_content text-center">
                    <h2>Services</h2>
                    <div class="page_link">
                        <a href="{{url('/index')}}">Home</a>
                        <a href="{{url('/services')}}">Services</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================ End Banner Area =================-->

	<!--================ Start Features Area =================-->
	<section class="features_area section_gap_top">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 text-center">
                    <div class="main_title">
                        <h2>service offers </h2>
                        <p>
                            Is give may shall likeness made yielding spirit a itself togeth created 
                            after sea <br> is in beast beginning signs open god you're gathering ithe
                        </p>
                    </div>
                </div>
            </div>
            <div class="row feature_inner">
                <div class="col-lg-3 col-md-6">
                    <div class="feature_item">
                        <img src="img/services/s1.png" alt="">
                        <h4>Wp developing</h4>
                        <p>Creeping for female light years that lesser can't evening heaven isn't bearing tree</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="feature_item">
                        <img src="img/services/s2.png" alt="">
                        <h4>UI/ux design</h4>
                        <p>Creeping for female light years that lesser can't evening heaven isn't bearing tree</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="feature_item">
                        <img src="img/services/s3.png" alt="">
                        <h4>Web design</h4>
                        <p>Creeping for female light years that lesser can't evening heaven isn't bearing tree</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="feature_item">
                        <img src="img/services/s4.png" alt="">
                        <h4>seo optimize</h4>
                        <p>Creeping for female light years that lesser can't evening heaven isn't bearing tree</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================ End Features Area =================-->

	<!--================ Start Testimonial Area =================-->
	
    <!--================ End Testimonial Area =================-->
    
    <!--================ Start Newsletter Area =================-->
    <section class="newsletter_area">
        <div class="container">
            <div class="row justify-content-center align-items-center">
                <div class="col-lg-12">
                    <div class="subscription_box text-center">
                        <h2 class="text-uppercase text-white">get update from anywhere</h2>
                        <p class="text-white">
                            Bearing Void gathering light light his eavening unto dont afraid. 
                        </p>
                        <div class="subcribe-form" id="mc_embed_signup">
                            <form target="_blank" novalidate="true" action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01" method="get" class="subscription relative">
                                <input name="EMAIL" placeholder="Email address" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email address'" required="" type="email">
                                <div style="position: absolute; left: -5000px;">
                                    <input name="b_36c4fd991d266f23781ded980_aefe40901a" tabindex="-1" value="" type="text">
                                </div>
                                <button class="primary-btn hover d-inline">Get Started</button>
                                <div class="info"></div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================ End Newsletter Area =================-->
        
        <!--================Footer Area =================-->
	
    <!--================End Footer Area =================-->
    
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->

@endsection
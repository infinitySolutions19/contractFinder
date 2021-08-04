    
@extends('layout-frontend/app')

  

@section('content')

    <!--============= Banner Section Starts Here =============-->

    <section class="banner-section-2 bg_img" data-background="{{asset('frontend/images/banner/banner-bg-2.png')}}">

        <div class="container mt-5">

            <div class="row align-items-center justify-content-between align-items-center">

                <div class="col-lg-6 col-xl-6">

                    <div class="banner-content cl-white">

                        <h6 class="title">Welcome to Contract Finder Alerts</h6>

                        <h4 class="cate">The Most Popular Free Contract Finder</h4>

                        <!-- <h6 class="cate">What We Do</h6> -->

                        <p>

                           Identify public sector contract opportunities. Keep you up to date with the latest tenders. Deliver tailored public sector market analysis.

                        </p>

                        <a href="#0" class="custom-button pink btn-large">Get Started</a>

                    </div>

                </div>

                <div class="col-lg-6 col-xl-6 d-lg-block">



          <!-- <div class="s010">

      <form>

        <div class="inner-form">

          <div class="basic-search">

            <div class="input-field">

              <input id="search" type="text" placeholder="Type Keywords" />

              <div class="icon-wrap">

                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">

                  <path d="M15.5 14h-.79l-.28-.27C15.41 12.59 16 11.11 16 9.5 16 5.91 13.09 3 9.5 3S3 5.91 3 9.5 5.91 16 9.5 16c1.61 0 3.09-.59 4.23-1.57l.27.28v.79l5 4.99L20.49 19l-4.99-5zm-6 0C7.01 14 5 11.99 5 9.5S7.01 5 9.5 5 14 7.01 14 9.5 11.99 14 9.5 14z"></path>

                </svg>

              </div>

            </div>

          </div>

          <div class="advance-search">

            <span class="desc">ADVANCED SEARCH</span>

            <div class="row">

              <div class="input-field">

                <div class="input-select">

                  <select data-trigger="" name="choices-single-defaul">

                    <option placeholder="" value="">Accessories</option>

                    <option>Subject b</option>

                    <option>Subject c</option>

                  </select>

                </div>

              </div>

              <div class="input-field">

                <div class="input-select">

                  <select data-trigger="" name="choices-single-defaul">

                    <option placeholder="" value="">Color</option>

                    <option>Subject b</option>

                    <option>Subject c</option>

                  </select>

                </div>

              </div>

              <div class="input-field">

                <div class="input-select">

                  <select data-trigger="" name="choices-single-defaul">

                    <option placeholder="" value="">Size</option>

                    <option>Subject b</option>

                    <option>Subject c</option>

                  </select>

                </div>

              </div>

            </div>

            <div class="row second">

              <div class="input-field">

                <div class="input-select">

                  <select data-trigger="" name="choices-single-defaul">

                    <option placeholder="" value="">Sale</option>

                    <option>Subject b</option>

                    <option>Subject c</option>

                  </select>

                </div>

              </div>

              <div class="input-field">

                <div class="input-select">

                  <select data-trigger="" name="choices-single-defaul">

                    <option placeholder="" value="">Time</option>

                    <option>Last time</option>

                    <option>Today</option>

                    <option>This week</option>

                    <option>This month</option>

                    <option>This year</option>

                  </select>

                </div>

              </div>

              <div class="input-field">

                <div class="input-select">

                  <select data-trigger="" name="choices-single-defaul">

                    <option placeholder="" value="">Type</option>

                    <option>Subject b</option>

                    <option>Subject c</option>

                  </select>

                </div>

              </div>

            </div>

            <div class="row third">

              <div class="input-field">

                <div class="result-count">

                  <span>108 </span>results</div>

                <div class="group-btn">

                  <button class="btn-delete" id="delete">RESET</button>

                  <button class="btn-search">SEARCH</button>

                </div>

              </div>

            </div>

          </div>

        </div>

      </form>

    </div> -->



    



        @include('include-frontend.searchboxhome')



    

                </div>                

            </div>

        </div>

        <div class="banner-shape-2 d-none d-lg-block">

            <img src="{{asset('frontend/css/img/banner-shape-2.png')}}" alt="css">

        </div>

    </section>

    <!--============= Banner Section Ends Here =============-->


    <!--============= Hightlight Slider Section Starts Here =============-->

    <div class="browse-slider-section mt--140">

        <div class="container">

            <div class="section-header-2 mb-4">

                <div class="left">

                    <h4 class="title cl-white cl-lg-black pl-0 pt-5">CONTRACT CATEGORIES</h4>

                </div>

                <div class="slider-nav">

                    <a href="#0" class="bro-prev"><i class="flaticon-left-arrow"></i></a>

                    <a href="#0" class="bro-next active"><i class="flaticon-right-arrow"></i></a>

                </div>

            </div>

            <div class="m--15">

                <div class="browse-slider owl-theme owl-carousel">

                    <a href="#0" class="browse-item">

                        <img src="{{asset('frontend/images/auction/categories/4.png')}}" alt="auction">

                        <span class="info">Defence</span>

                    </a>

                    <a href="#0" class="browse-item">

                        <img src="{{asset('frontend/images/auction/categories/5.png')}}" alt="auction">

                        <span class="info">Energy</span>

                    </a>

                    <a href="#0" class="browse-item">

                        <img src="{{asset('frontend/images/auction/categories/6.png')}}" alt="auction">

                        <span class="info">Community and Social</span>

                    </a>

                    <a href="#0" class="browse-item">

                        <img src="{{asset('frontend/images/auction/categories/1.png')}}" alt="auction">

                        <span class="info">It and Telecoms</span>

                    </a>

                    <a href="#0" class="browse-item">

                        <img src="{{asset('frontend/images/auction/categories/2.png')}}" alt="auction">

                        <span class="info">Constructions</span>

                    </a>

                    <a href="#0" class="browse-item">

                        <img src="{{asset('frontend/images/auction/categories/3.png')}}" alt="auction">

                        <span class="info">Education and Training</span>

                    </a>

                </div>

            </div>

        </div>

    </div>

    <!--============= Hightlight Slider Section Ends Here =============-->


    <!--============= Feture Auction Section Starts Here =============-->

    <section class="feature-auction-section padding-bottom padding-top bg_img" data-background="{{asset('frontend/images/auction/featured/featured-bg-1.jpg')}}">

        <div class="container">

            <div class="section-header">

                <h3 class="title">LATEST TENDERS</h3>

                <!-- <p>Bid and win great deals,Our auction process is simple, efficient, and transparent.</p> -->

            </div>

            

             



            @include('include-frontend.vertical-card')



             





            <div class="load-wrapper">

                <a href="#0" class="normal-button">Search All Auctions</a>

            </div>

        </div>

    </section>

    <!--============= Feture Auction Section Ends Here =============-->


    <!--============= Overview Section Starts Here =============-->
    <section class="overview-section padding-top">
        <div class="container mt--140 p-lg-0 home-overview-section">
            <div class="row m-0">
                <div class="col-lg-6 p-0">
                    <div class="overview-content">
                        <div class="section-header text-lg-left">
                            <h2 class="title">What can you expect?</h2>
                            <p>Voluptate aut blanditiis accusantium officiis expedita dolorem inventore odio reiciendis obcaecati quod nisi quae</p>
                        </div>
                        <div class="row mb--50">
                            <div class="col-sm-6">
                                <div class="expert-item">
                                    <div class="thumb">
                                        <img src="{{asset('frontend/images/overview/01.png')}}" alt="overview">
                                    </div>
                                    <div class="content">
                                        <h6 class="title">Daily Email Tender Alerts</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="expert-item">
                                    <div class="thumb">
                                        <img src="{{asset('frontend/images/overview/02.png')}}" alt="overview">
                                    </div>
                                    <div class="content">
                                        <h6 class="title">Cancel Any Time</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="expert-item">
                                    <div class="thumb">
                                        <img src="{{asset('frontend/images/overview/03.png')}}" alt="overview">
                                    </div>
                                    <div class="content">
                                        <h6 class="title">Research Your Rivals With Our Analysis Tool</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="expert-item">
                                    <div class="thumb">
                                        <img src="{{asset('frontend/images/overview/04.png')}}" alt="overview">
                                    </div>
                                    <div class="content">
                                        <h6 class="title">Access More Than 250,000 Contracts - Live And Historical</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="expert-item">
                                    <div class="thumb">
                                        <img src="{{asset('frontend/images/overview/05.png')}}" alt="overview">
                                    </div>
                                    <div class="content">
                                        <h6 class="title">Access To Affordable Winning Bid Writers</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="expert-item">
                                    <div class="thumb">
                                        <img src="{{asset('frontend/images/overview/06.png')}}" alt="overview">
                                    </div>
                                    <div class="content">
                                        <h6 class="title">Add To Tenders To Watchlist</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 pl-30 pr-0">
                    <div class="w-100 h-100 bg_img rounded" data-background="{{asset('frontend/images/overview/overview-bg.png')}}"></div>
                </div>
            </div>
        </div>
    </section>
    <!--============= Overview Section Ends Here =============-->

    <!--============= How Section Starts Here =============-->
    <section class="how-section padding-top">
        <div class="container">
            <div class="how-wrapper section-bg">
                <div class="section-header text-lg-left">
                    <h2 class="title">How it works</h2>
                    <p>Easy 3 steps to win</p>
                </div>
                <div class="row justify-content-center mb--40">
                    <div class="col-md-6 col-lg-4">
                        <div class="how-item how-it-works">
                            <div class="how-thumb">
                                <img src="{{asset('frontend/images/how/how1.png')}}" alt="how">
                            </div>
                            <div class="how-content">
                                <h4 class="title">Sign Up</h4>
                                <p>Free 30 Day Trial</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="how-item how-it-works">
                            <div class="how-thumb">
                                <img src="{{asset('frontend/images/how/how2.png')}}" alt="how">
                            </div>
                            <div class="how-content">
                                <h4 class="title">Find Tenders</h4>
                                <p>Set Tender Alerts For Key Words + Talk to expert bid writers</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="how-item how-it-works">
                            <div class="how-thumb">
                                <img src="{{asset('frontend/images/how/how3.png')}}" alt="how">
                            </div>
                            <div class="how-content">
                                <h4 class="title">Win</h4>
                                <p>Win hard to find Tenders</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--============= How Section Ends Here =============-->


    <!--============= Client Section Starts Here =============-->
    <section class="client-section padding-top padding-bottom">
        <div class="container">
            <div class="section-header">
                <h2 class="title">Don’t just take our word for it!</h2>
                <p>Our hard work is paying off. Great reviews from amazing customers.</p>
            </div>
            <div class="m--15">
                <div class="client-slider owl-theme owl-carousel">
                    <div class="client-item">
                        <div class="client-content">
                            <p>I can't stop bidding! It's a great way to spend some time and I want everything on Sbidu.</p>
                        </div>
                        <div class="client-author">
                            <div class="thumb">
                                <a href="#0">
                                    <img src="{{asset('frontend/images/client/client01.png')}}" alt="client">
                                </a>
                            </div>
                            <div class="content">
                                <h6 class="title"><a href="#0">Alexis Moore</a></h6>
                                <div class="ratings">
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="client-item">
                        <div class="client-content">
                            <p>I came I saw I won. Love what I have won, and will try to win something else.</p>
                        </div>
                        <div class="client-author">
                            <div class="thumb">
                                <a href="#0">
                                    <img src="{{asset('frontend/images/client/client02.png')}}" alt="client">
                                </a>
                            </div>
                            <div class="content">
                                <h6 class="title"><a href="#0">Darin Griffin</a></h6>
                                <div class="ratings">
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="client-item">
                        <div class="client-content">
                            <p>This was my first time, but it was exciting. I will try it again. Thank you so much.</p>
                        </div>
                        <div class="client-author">
                            <div class="thumb">
                                <a href="#0">
                                    <img src="{{asset('frontend/images/client/client03.png')}}" alt="client">
                                </a>
                            </div>
                            <div class="content">
                                <h6 class="title"><a href="#0">Tom Powell</a></h6>
                                <div class="ratings">
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--============= Client Section Ends Here =============-->

    <!--============= Upcoming Auction Section Starts Here =============-->
    <!--  <section class="upcoming-auction padding-bottom">

        <div class="container">

            <div class="section-header">

                <h3 class="title">ALL CONTRACTS</h3>

                <p>You are welcome to attend and join in the action at any of our upcoming auctions.</p>

            </div>

        </div>

      

        <div class="container">

            <div class="m--15">

                



        //include('horizontal-card');



                

            </div>

        </div>

    </section> -->
    <!--============= Upcoming Auction Section Ends Here =============-->

    <!--============= How Section Starts Here =============-->

    <section class="how-video-section pos-rel mt-5">

        <div class="popular-bg bg_img" data-background="{{asset('frontend/images/auction/popular/popular-bg.png')}}"></div>

        <div class="how-video-shape bg_img d-none d-md-block" data-background="{{asset('frontend/css/img/how-video.png')}}"></div>

        <div class="container">

            <div class="how-video-wrapper">

                <div class="how-video-area">

                    <a href="https://www.youtube.com/watch?v=Mj3QejzYZ70" class="popup">

                        <h5 class="title">Watch Our Videos</h5>

                        <div class="video-button">

                            <i class="flaticon-right-arrow-1"></i>

                            <span></span>

                            <span></span>

                        </div>

                    </a>

                </div>

            </div>

            <div class="how-wrapper section-bg shadow-style">



                <div class="section-header text-lg-left">

                    <h3 class="title">WHY CONTRACT FINDERS PRO?</h3>

                    <p class="h4">BENIFITS</p>

                </div>



                <div class="row justify-content-center ">

                    <div class="col-md-6 col-lg-3">

                        <div class="how-item">

                            <div class="how-thumb">

                                <img src="{{asset('frontend/images/how/bell-gold.png')}}" alt="how">

                            </div>

                            <div class="how-content">

                                <!-- <h4 class="title">Sign Up</h4> -->

                                <p>Never miss a tender thanks to tailored daily email alerts.</p>

                            </div>

                        </div>

                    </div>



                    <div class="col-md-6 col-lg-3">

                        <div class="how-item">

                            <div class="how-thumb">

                                <img src="{{asset('frontend/images/how/lock-gold.png')}}" alt="how">

                            </div>

                            <div class="how-content">

                                <!-- <h4 class="title">Sign Up</h4> -->

                                <p>Access more than 250,000 contracts - live and historical.</p>

                            </div>

                        </div>

                    </div>



                    <div class="col-md-6 col-lg-3">

                        <div class="how-item">

                            <div class="how-thumb">

                                <img src="{{asset('frontend/images/how/loupe.png')}}" alt="how">

                            </div>

                            <div class="how-content">

                                <!-- <h4 class="title">Sign Up</h4> -->

                                <p>Enjoy personalised, simple and fast searching.</p>

                            </div>

                        </div>

                    </div>



                    <div class="col-md-6 col-lg-3">

                        <div class="how-item">

                            <div class="how-thumb">

                                <img src="{{asset('frontend/images/how/tick.png')}}" alt="how">

                            </div>

                            <div class="how-content">

                                <!-- <h4 class="title">Sign Up</h4> -->

                                <p>Research your rivals with our competitive analysis tool.</p>

                            </div>

                        </div>

                    </div>

                </div>



                <div class="section-header text-lg-left">

                    <p class="h4">FEATURES</p>

                </div>



                <div class="row justify-content-center ">

                    <div class="col-md-6 col-lg-3">

                        <div class="how-item">

                            <div class="how-thumb">

                                <img src="{{asset('frontend/images/how/internet.png')}}" alt="how">

                            </div>

                            <div class="how-content">

                                <!-- <h4 class="title">Sign Up</h4> -->

                                <p>Be informed - over 60,000 UK public sector tenders where issued in 2019.</p>

                            </div>

                        </div>

                    </div>



                    <div class="col-md-6 col-lg-3">

                        <div class="how-item">

                            <div class="how-thumb">

                                <img src="{{asset('frontend/images/how/money.png')}}" alt="how">

                            </div>

                            <div class="how-content">

                                <!-- <h4 class="title">Sign Up</h4> -->

                                <p>Cancel any time with our monthly, low cost subscription.</p>

                            </div>

                        </div>

                    </div>



                    <div class="col-md-6 col-lg-3">

                        <div class="how-item">

                            <div class="how-thumb">

                                <img src="{{asset('frontend/images/how/result-gold.png')}}" alt="how">

                            </div>

                            <div class="how-content">

                                <!-- <h4 class="title">Sign Up</h4> -->

                                <p>Analyse buyer behaviour - explore every UK buying authority.</p>

                            </div>

                        </div>

                    </div>



                    <div class="col-md-6 col-lg-3">

                        <div class="how-item">

                            <div class="how-thumb">

                                <img src="{{asset('frontend/images/how/time.png')}}" alt="how">

                            </div>

                            <div class="how-content">

                                <!-- <h4 class="title">Sign Up</h4> -->

                                <p>Flash emails alert to time sensitive opportunities.</p>

                            </div>

                        </div>

                    </div>

                </div>



            </div>

        </div>

    </section>



    <div class=" p-lg-2">

        

    </div>

    <!--============= How Section Starts Here =============-->



@endsection


   
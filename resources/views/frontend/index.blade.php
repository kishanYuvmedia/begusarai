@extends('frontend.layouts.master')
@section('title', 'Home')
@section('content')

    <body>
        <div>

            <main id="main" class="site-main home-main business-main overflow">
                <div class="site-banner bg_hero_02" style="background-color:rgb(0, 207, 207)">
                    {{-- <video class="overlay-video" autoplay="" muted="" playsinline="" loop=""
                        src="{{ asset('https://getgolo.com/images/video3.mp4') }}"></video> --}}
                    <div class="container">
                        <div class="site-banner__content">
                            <h1 class="site-banner__title">Business Listing</h1>
                            <p>
                                <i>20</i> cities, <i>10</i> categories, <i>5662</i> listings.
                            </p>
                            <form action="#" class="site-banner__search layout-02">
                                <div class="field-input">
                                    <label for="s">Find</label>
                                    <input class="site-banner__search__input open-suggestion" id="s" type="text"
                                        name="s" placeholder="Ex: fastfood, beer" autocomplete="off" />
                                    <div class="search-suggestions name-suggestions">
                                        <ul>
                                            <li>
                                                <a href="#"><i class="las la-utensils"></i><span>Restaurant</span></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="las la-spa"></i><span>Beauty</span></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="las la-dumbbell"></i><span>Fitness</span></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="las la-cocktail"></i><span>Nightlight</span></a>
                                            </li>
                                            <li>
                                                <a href="#"><i
                                                        class="las la-shopping-bag"></i><span>Shopping</span></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="las la-film"></i><span>Cinema</span></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- .site-banner__search__input -->
                                <div class="field-input">
                                    <label for="loca">Where</label>
                                    <input class="site-banner__search__input open-suggestion" id="loca" type="text"
                                        name="where" placeholder="Your city" autocomplete="off" />
                                    <div class="search-suggestions location-suggestions">
                                        <ul>
                                            <li>
                                                <a href="#"><i class="las la-location-arrow"></i><span>Current
                                                        location</span></a>
                                            </li>
                                            <li>
                                                <a href="#"><span>San Francisco, CA</span></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- .site-banner__search__input -->
                                <div class="field-submit">
                                    <button><i class="las la-search la-24-black"></i></button>
                                </div>
                            </form>
                            <!-- .site-banner__search -->
                        </div>
                        <!-- .site-banner__content -->
                    </div>
                </div>
                <!-- .site-banner -->
                <div class="business-category">
                    <div class="container">
                        <h2 class="title title-border-bottom align-center offset-item">
                            Browse Businesses by Category
                        </h2>
                        <div class="slick-sliders offset-item">
                            <div class="slick-slider business-cat-slider slider-pd30" data-item="6" data-arrows="true"
                                data-itemScroll="6" data-dots="true" data-centerPadding="50" data-tabletitem="3"
                                data-tabletscroll="3" data-smallpcitem="4" data-smallpcscroll="4" data-mobileitem="2"
                                data-mobilescroll="2" data-mobilearrows="false">
                                <div class="bsn-cat-item rosy-pink">
                                    <a href="ex-half-map-1.html">
                                        <i class="las la-utensils"></i>
                                        <span class="title">Restaurant</span>
                                        <span class="place">12 Places</span>
                                    </a>
                                </div>
                                <div class="bsn-cat-item purple">
                                    <a href="ex-half-map-1.html">
                                        <i class="las la-spa"></i>
                                        <span class="title">Beauty</span>
                                        <span class="place">8 Places</span>
                                    </a>
                                </div>
                                <div class="bsn-cat-item blue">
                                    <a href="ex-half-map-1.html">
                                        <i class="las la-dumbbell"></i>
                                        <span class="title">Fitness</span>
                                        <span class="place">6 Places</span>
                                    </a>
                                </div>
                                <div class="bsn-cat-item orange">
                                    <a href="ex-half-map-1.html">
                                        <i class="las la-cocktail"></i>
                                        <span class="title">Nightlife</span>
                                        <span class="place">10 Places</span>
                                    </a>
                                </div>
                                <div class="bsn-cat-item charcoal-purple">
                                    <a href="ex-half-map-1.html">
                                        <i class="las la-shopping-bag"></i>
                                        <span class="title">Shopping</span>
                                        <span class="place">12 Places</span>
                                    </a>
                                </div>
                                <div class="bsn-cat-item green">
                                    <a href="ex-half-map-1.html">
                                        <i class="las la-film"></i>
                                        <span class="title">Cinema</span>
                                        <span class="place">15 Places</span>
                                    </a>
                                </div>
                                <div class="bsn-cat-item rosy-pink">
                                    <a href="ex-half-map-1.html">
                                        <i class="las la-utensils"></i>
                                        <span class="title">Restaurant</span>
                                        <span class="place">12 Places</span>
                                    </a>
                                </div>
                            </div>
                            <div class="place-slider__nav slick-nav">
                                <div class="place-slider__prev slick-nav__prev">
                                    <i class="las la-angle-left"></i>
                                </div>
                                <!-- .place-slider__prev -->
                                <div class="place-slider__next slick-nav__next">
                                    <i class="las la-angle-right"></i>
                                </div>
                                <!-- .place-slider__next -->
                            </div>
                            <!-- .place-slider__nav -->
                        </div>
                    </div>
                </div>
                <!-- .business-category -->
                <div class="trending trending-business">
                    <div class="container">
                        <h2 class="title title-border-bottom align-center offset-item">
                            Trending Business Places
                        </h2>
                        <div class="slick-sliders offset-item">
                            <div class="slick-slider trending-slider slider-pd30" data-item="4" data-arrows="true"
                                data-itemScroll="4" data-dots="true" data-centerPadding="30" data-tabletitem="2"
                                data-tabletscroll="2" data-smallpcscroll="3" data-smallpcitem="3" data-mobileitem="1"
                                data-mobilescroll="1" data-mobilearrows="false">
                                <div class="place-item layout-02 place-hover">
                                    <div class="place-inner">
                                        <div class="place-thumb hover-img">
                                            <a class="entry-thumb" href="single-1.html"><img src="images/listing/01.jpg"
                                                    alt="" /></a>
                                            <a href="#" class="golo-add-to-wishlist btn-add-to-wishlist"
                                                data-place-id="185">
                                                <span class="icon-heart">
                                                    <i class="la la-bookmark large"></i>
                                                </span>
                                            </a>
                                            <a class="entry-category rosy-pink" href="#">
                                                <i class="las la-utensils"></i><span>Restaurant</span>
                                            </a>
                                            <a href="#" class="author" title="Author"><img
                                                    src="images/avatars/male-3.jpg" alt="Author" /></a>
                                            <div class="feature">Featured</div>
                                        </div>
                                        <div class="entry-detail">
                                            <div class="entry-head">
                                                <div class="place-type list-item">
                                                    <span>Restaurant</span>
                                                </div>
                                                <div class="place-city">
                                                    <a href="#">Paris</a>
                                                </div>
                                            </div>
                                            <h3 class="place-title">
                                                <a href="single-1.html">Mattone Restaurant</a>
                                            </h3>
                                            <div class="open-now">
                                                <i class="las la-door-open"></i>Open now
                                            </div>
                                            <div class="entry-bottom">
                                                <div class="place-preview">
                                                    <div class="place-rating">
                                                        <span>5.0</span>
                                                        <i class="la la-star"></i>
                                                    </div>
                                                    <span class="count-reviews">(2 Reviews)</span>
                                                </div>
                                                <div class="place-price">
                                                    <span>$$</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="place-item layout-02 place-hover">
                                    <div class="place-inner">
                                        <div class="place-thumb hover-img">
                                            <a class="entry-thumb" href="single-1.html"><img src="images/listing/02.jpg"
                                                    alt="" /></a>
                                            <a href="#" class="golo-add-to-wishlist btn-add-to-wishlist"
                                                data-place-id="185">
                                                <span class="icon-heart">
                                                    <i class="la la-bookmark large"></i>
                                                </span>
                                            </a>
                                            <a class="entry-category blue" href="#">
                                                <i class="las la-dumbbell"></i><span>Gym</span>
                                            </a>
                                            <a href="#" class="author" title="Author"><img
                                                    src="images/avatars/male-2.jpg" alt="Author" /></a>
                                        </div>
                                        <div class="entry-detail">
                                            <div class="entry-head">
                                                <div class="place-type list-item">
                                                    <span>Gym</span>
                                                </div>
                                                <div class="place-city">
                                                    <a href="#">Bordeaux</a>
                                                </div>
                                            </div>
                                            <h3 class="place-title">
                                                <a href="single-1.html">Retro Fitness</a>
                                            </h3>
                                            <div class="open-now">
                                                <i class="las la-door-open"></i>Open now
                                            </div>
                                            <div class="entry-bottom">
                                                <div class="place-preview">
                                                    <div class="place-rating">
                                                        <span>5.0</span>
                                                        <i class="la la-star"></i>
                                                    </div>
                                                    <span class="count-reviews">(2 Reviews)</span>
                                                </div>
                                                <div class="place-price">
                                                    <span>$$</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="place-item layout-02 place-hover">
                                    <div class="place-inner">
                                        <div class="place-thumb hover-img">
                                            <a class="entry-thumb" href="single-1.html"><img src="images/listing/03.jpg"
                                                    alt="" /></a>
                                            <a href="#" class="golo-add-to-wishlist btn-add-to-wishlist"
                                                data-place-id="185">
                                                <span class="icon-heart">
                                                    <i class="la la-bookmark large"></i>
                                                </span>
                                            </a>
                                            <a class="entry-category purple" href="#">
                                                <i class="las la-spa"></i><span>Massage</span>
                                            </a>
                                            <a href="#" class="author" title="Author"><img
                                                    src="images/avatars/female-3.jpg" alt="Author" /></a>
                                        </div>
                                        <div class="entry-detail">
                                            <div class="entry-head">
                                                <div class="place-type list-item">
                                                    <span>Massage</span>
                                                </div>
                                                <div class="place-city">
                                                    <a href="#">Lyon</a>
                                                </div>
                                            </div>
                                            <h3 class="place-title">
                                                <a href="single-1.html">Renew Body Spa</a>
                                            </h3>
                                            <div class="close-now">
                                                <i class="las la-door-closed"></i>Close now
                                            </div>
                                            <div class="entry-bottom">
                                                <div class="place-preview">
                                                    <div class="place-rating">
                                                        <span>5.0</span>
                                                        <i class="la la-star"></i>
                                                    </div>
                                                    <span class="count-reviews">(2 Reviews)</span>
                                                </div>
                                                <div class="place-price">
                                                    <span>$$</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="place-item layout-02 place-hover">
                                    <div class="place-inner">
                                        <div class="place-thumb hover-img">
                                            <a class="entry-thumb" href="single-1.html"><img src="images/listing/04.jpg"
                                                    alt="" /></a>
                                            <a href="#" class="golo-add-to-wishlist btn-add-to-wishlist"
                                                data-place-id="185">
                                                <span class="icon-heart">
                                                    <i class="la la-bookmark large"></i>
                                                </span>
                                            </a>
                                            <a class="entry-category charcoal-purple" href="#">
                                                <i class="las la-shopping-bag"></i><span>Clothing Shop</span>
                                            </a>
                                            <a href="#" class="author" title="Author"><img
                                                    src="images/avatars/male-4.jpg" alt="Author" /></a>
                                        </div>
                                        <div class="entry-detail">
                                            <div class="entry-head">
                                                <div class="place-type list-item">
                                                    <span>Clothing Shop</span>
                                                </div>
                                                <div class="place-city">
                                                    <a href="#">Nantes</a>
                                                </div>
                                            </div>
                                            <h3 class="place-title">
                                                <a href="single-1.html">Antoinette</a>
                                            </h3>
                                            <div class="close-now">
                                                <i class="las la-door-closed"></i>Close now
                                            </div>
                                            <div class="entry-bottom">
                                                <div class="place-preview">
                                                    <span class="no-reviews">(no reviews)</span>
                                                </div>
                                                <div class="place-price">
                                                    <span>$$$</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="place-item layout-02 place-hover">
                                    <div class="place-inner">
                                        <div class="place-thumb hover-img">
                                            <a class="entry-thumb" href="single-1.html"><img src="images/listing/06.jpg"
                                                    alt="" /></a>
                                            <a href="#" class="golo-add-to-wishlist btn-add-to-wishlist"
                                                data-place-id="185">
                                                <span class="icon-heart">
                                                    <i class="la la-bookmark large"></i>
                                                </span>
                                            </a>
                                            <a class="entry-category green" href="#">
                                                <i class="las la-film"></i><span>Cinema</span>
                                            </a>
                                            <a href="#" class="author" title="Author"><img
                                                    src="images/avatars/female-3.jpg" alt="Author" /></a>
                                        </div>
                                        <div class="entry-detail">
                                            <div class="entry-head">
                                                <div class="place-type list-item">
                                                    <span>Restaurant</span>
                                                </div>
                                                <div class="place-city">
                                                    <a href="#">Paris</a>
                                                </div>
                                            </div>
                                            <h3 class="place-title">
                                                <a href="single-1.html">Kathay Cinema</a>
                                            </h3>
                                            <div class="close-now">
                                                <i class="las la-door-closed"></i>Close now
                                            </div>
                                            <div class="entry-bottom">
                                                <div class="place-preview">
                                                    <span class="no-reviews">(no reviews)</span>
                                                </div>
                                                <div class="place-price">
                                                    <span>$$</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="place-slider__nav slick-nav">
                                <div class="place-slider__prev slick-nav__prev">
                                    <i class="las la-angle-left"></i>
                                </div>
                                <!-- .place-slider__prev -->
                                <div class="place-slider__next slick-nav__next">
                                    <i class="las la-angle-right"></i>
                                </div>
                                <!-- .place-slider__next -->
                            </div>
                            <!-- .place-slider__nav -->
                        </div>
                    </div>
                </div>
                <!-- .trending -->
                <div class="featured-cities">
                    <div class="container">
                        <h2 class="title title-border-bottom align-center offset-item">
                            Featured Cities<span>Choose the city you’ll be living in next</span>
                        </h2>
                        <div class="slick-sliders offset-item">
                            <div class="slick-slider featured-slider slider-pd30" data-item="4" data-arrows="true"
                                data-itemScroll="4" data-dots="true" data-centerPadding="30" data-tabletitem="2"
                                data-tabletscroll="2" data-mobileitem="1" data-mobilescroll="1"
                                data-mobilearrows="false">
                                <div class="slick-item">
                                    <div class="cities__item hover__box">
                                        <div class="cities__thumb hover__box__thumb">
                                            <a title="London" href="city-details-1.html">
                                                <img src="images/city/newyork.jpg" alt="London" />
                                            </a>
                                        </div>
                                        <h4 class="cities__name">United States</h4>
                                        <div class="cities__info">
                                            <h3 class="cities__capital">New York</h3>
                                            <p class="cities__number">80 places</p>
                                        </div>
                                    </div>
                                    <!-- .cities__item -->
                                </div>
                                <div class="slick-item">
                                    <div class="cities__item hover__box">
                                        <div class="cities__thumb hover__box__thumb">
                                            <a title="Rome" href="city-details-1.html">
                                                <img src="images/city/barca.jpg" alt="Rome" />
                                            </a>
                                        </div>
                                        <h4 class="cities__name">Spain</h4>
                                        <div class="cities__info">
                                            <h3 class="cities__capital">Barcelona</h3>
                                            <p class="cities__number">92 places</p>
                                        </div>
                                    </div>
                                    <!-- .cities__item -->
                                </div>
                                <div class="slick-item">
                                    <div class="cities__item hover__box">
                                        <div class="cities__thumb hover__box__thumb">
                                            <a title="San Fancisco" href="city-details-1.html">
                                                <img src="images/city/angeles.jpg" alt="San Francisco" />
                                            </a>
                                        </div>
                                        <h4 class="cities__name">United States</h4>
                                        <div class="cities__info">
                                            <h3 class="cities__capital">Los Angeles</h3>
                                            <p class="cities__number">64 places</p>
                                        </div>
                                    </div>
                                    <!-- .cities__item -->
                                </div>
                                <div class="slick-item">
                                    <div class="cities__item hover__box">
                                        <div class="cities__thumb hover__box__thumb">
                                            <a title="Amsterdam" href="city-details-1.html">
                                                <img src="images/city/amsterdam.jpg" alt="Amsterdam" />
                                            </a>
                                        </div>
                                        <h4 class="cities__name">Netherlands</h4>
                                        <div class="cities__info">
                                            <h3 class="cities__capital">Amsterdam</h3>
                                            <p class="cities__number">44 places</p>
                                        </div>
                                    </div>
                                    <!-- .cities__item -->
                                </div>
                                <div class="slick-item">
                                    <div class="cities__item hover__box">
                                        <div class="cities__thumb hover__box__thumb">
                                            <a title="Tokyo" href="city-details-1.html">
                                                <img src="images/city/tokyo.jpg" alt="Tokyo" />
                                            </a>
                                        </div>
                                        <h4 class="cities__name">Japan</h4>
                                        <div class="cities__info">
                                            <h3 class="cities__capital">Tokyo</h3>
                                            <p class="cities__number">44 places</p>
                                        </div>
                                    </div>
                                    <!-- .cities__item -->
                                </div>
                            </div>
                            <div class="place-slider__nav slick-nav">
                                <div class="place-slider__prev slick-nav__prev">
                                    <i class="las la-angle-left"></i>
                                </div>
                                <!-- .place-slider__prev -->
                                <div class="place-slider__next slick-nav__next">
                                    <i class="las la-angle-right"></i>
                                </div>
                                <!-- .place-slider__next -->
                            </div>
                            <!-- .place-slider__nav -->
                        </div>
                    </div>
                </div>
                <!-- .featured-cities -->
                <div class="business-about" style="background-image: url(images/img_about_1.jpg)">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="business-about-info">
                                    <h2 class="offset-item">Who we are</h2>
                                    <p class="offset-item">
                                        Many desktop publishing packages and web page editors now
                                        use Lorem Ipsum as their default model text, and a search
                                        for 'lorem ipsum' will uncover many web sites still in their
                                        infancy. Various versions have evolved over the years,
                                        sometimes by accident.
                                    </p>
                                    <a href="#" class="btn offset-item">Read more</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- .business-about -->
                <div class="testimonial">
                    <div class="container">
                        <h2 class="title title-border-bottom align-center offset-item">
                            People Talking About Us
                        </h2>
                        <div class="slick-sliders offset-item">
                            <div class="slick-slider testimonial-slider layout-02 slider-pd30" data-item="2"
                                data-arrows="true" data-itemScroll="2" data-dots="true" data-centerPadding="30"
                                data-tabletitem="1" data-tabletscroll="1" data-mobileitem="1" data-mobilescroll="1"
                                data-mobilearrows="false">
                                <div class="testimonial-item">
                                    <div class="avatar">
                                        <img src="images/avatars/male-1.jpg" alt="Avatar" />
                                        <img src="images/assets/quote-active.png" alt="Quote" class="quote" />
                                    </div>
                                    <div class="testimonial-info">
                                        <p>
                                            Really useful app to find interesting things to see do,
                                            drink and eat in new places. I’ve been using it regularly
                                            in my travels over the past few months.
                                        </p>
                                        <div class="testimonial-meta">
                                            <b>Kari Granleese</b>
                                            <span>CEO Alididi</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="testimonial-item">
                                    <div class="avatar">
                                        <img src="images/avatars/female-1.jpg" alt="Avatar" />
                                        <img src="images/assets/quote-active.png" alt="Quote" class="quote" />
                                    </div>
                                    <div class="testimonial-info">
                                        <p>
                                            Really useful app to find interesting things to see do,
                                            drink and eat in new places. I’ve been using it regularly
                                            in my travels over the past few months.
                                        </p>
                                        <div class="testimonial-meta">
                                            <b>Kari Granleese</b>
                                            <span>CEO Alididi</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="testimonial-item">
                                    <div class="avatar">
                                        <img src="images/avatars/female-3.jpg" alt="Avatar" />
                                        <img src="images/assets/quote-active.png" alt="Quote" class="quote" />
                                    </div>
                                    <div class="testimonial-info">
                                        <p>
                                            Really useful app to find interesting things to see do,
                                            drink and eat in new places. I’ve been using it regularly
                                            in my travels over the past few months.
                                        </p>
                                        <div class="testimonial-meta">
                                            <b>Kari Granleese</b>
                                            <span>CEO Alididi</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="place-slider__nav slick-nav">
                                <div class="place-slider__prev slick-nav__prev">
                                    <i class="las la-angle-left"></i>
                                </div>
                                <!-- .place-slider__prev -->
                                <div class="place-slider__next slick-nav__next">
                                    <i class="las la-angle-right"></i>
                                </div>
                                <!-- .place-slider__next -->
                            </div>
                            <!-- .place-slider__nav -->
                        </div>
                    </div>
                </div>
                <!-- .testimonial -->
                <div class="blogs">
                    <div class="container">
                        <h2 class="title title-border-bottom align-center offset-item">
                            From Our Blog
                        </h2>
                        <div class="news__content offset-item">
                            <div class="row">
                                <div class="col-md-4">
                                    <article class="post hover__box">
                                        <div class="post__thumb hover__box__thumb">
                                            <a title="The 8 Most Affordable Michelin Restaurants in Paris"
                                                href="blog-detail.html"><img src="images/blog/thumb-05.jpg"
                                                    alt="The 8 Most Affordable Michelin Restaurants in Paris" /></a>
                                        </div>
                                        <div class="post__info">
                                            <ul class="post__category">
                                                <li><a title="Food" href="#">Food & Drink</a></li>
                                            </ul>
                                            <h3 class="post__title">
                                                <a title="The 8 Most Affordable Michelin Restaurants in Paris"
                                                    href="blog-detail.html">10 Best Classic Diners in Manhattan</a>
                                            </h3>
                                        </div>
                                    </article>
                                </div>
                                <div class="col-md-4">
                                    <article class="post hover__box">
                                        <div class="post__thumb hover__box__thumb">
                                            <a title="The 7 Best Restaurants to Try Kobe Beef in London"
                                                href="blog-detail.html"><img src="images/blog/thumb-01.jpg"
                                                    alt="The 7 Best Restaurants to Try Kobe Beef in London" /></a>
                                        </div>
                                        <div class="post__info">
                                            <ul class="post__category">
                                                <li><a title="Art & Decor" href="#">Lifestyle</a></li>
                                            </ul>
                                            <h3 class="post__title">
                                                <a title="The 7 Best Restaurants to Try Kobe Beef in London"
                                                    href="blog-detail.html">The Stepping Razor Barbershop</a>
                                            </h3>
                                        </div>
                                    </article>
                                </div>
                                <div class="col-md-4">
                                    <article class="post hover__box">
                                        <div class="post__thumb hover__box__thumb">
                                            <a title="The 8 Most Affordable Michelin Restaurants in Paris"
                                                href="blog-detail.html"><img src="images/blog/thumb-10.jpg"
                                                    alt="The 8 Most Affordable Michelin Restaurants in Paris" /></a>
                                        </div>
                                        <div class="post__info">
                                            <ul class="post__category">
                                                <li><a title="Stay" href="#">Place to Stay</a></li>
                                            </ul>
                                            <h3 class="post__title">
                                                <a title="The 8 Most Affordable Michelin Restaurants in Paris"
                                                    href="blog-detail.html">The 9 Best Cheap Hotels in New York City</a>
                                            </h3>
                                        </div>
                                    </article>
                                </div>
                            </div>
                            <div class="align-center button-wrap">
                                <a href="blog-fullwidth.html" class="btn btn-border">View more</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- .blogs -->
            </main>
            <!-- .site-main -->
            {{-- <footer id="footer" class="footer">
                <div class="container">
                    <div class="footer__top">
                        <div class="row">
                            <div class="col-lg-5">
                                <div class="footer__top__info">
                                    <a title="Logo" href="01_index_1.html" class="footer__top__info__logo"><img
                                            src="images/assets/logo.png" alt="Golo" /></a>
                                    <p class="footer__top__info__desc">
                                        Discover amazing things to do everywhere you go.
                                    </p>
                                    <div class="footer__top__info__app">
                                        <a title="App Store" href="#" class="banner-apps__download__iphone"><img
                                                src="images/assets/app-store.png" alt="App Store" /></a>
                                        <a title="Google Play" href="#" class="banner-apps__download__android"><img
                                                src="images/assets/google-play.png" alt="Google Play" /></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-2">
                                <aside class="footer__top__nav">
                                    <h3>Company</h3>
                                    <ul>
                                        <li>
                                            <a title="About Us" href="06_about-us.html">About Us</a>
                                        </li>
                                        <li>
                                            <a title="Blog" href="07_blog-right-sidebar.html">Blog</a>
                                        </li>
                                        <li><a title="Faqs" href="15_faqs.html">Faqs</a></li>
                                        <li>
                                            <a title="Contact" href="09_contact-us.html">Contact</a>
                                        </li>
                                    </ul>
                                </aside>
                            </div>
                            <div class="col-lg-2">
                                <aside class="footer__top__nav">
                                    <h3>Support</h3>
                                    <ul>
                                        <li><a title="Get in Touch" href="#">Get in Touch</a></li>
                                        <li><a title="Help Center" href="#">Help Center</a></li>
                                        <li><a title="Live chat" href="#">Live chat</a></li>
                                        <li><a title="How it works" href="#">How it works</a></li>
                                    </ul>
                                </aside>
                            </div>
                            <div class="col-lg-3">
                                <aside class="footer__top__nav footer__top__nav--contact">
                                    <h3>Contact Us</h3>
                                    <p>
                                        Email:
                                        <a href="https://golohtml.uxper.co/cdn-cgi/l/email-protection"
                                            class="__cf_email__"
                                            data-cfemail="b6c5c3c6c6d9c4c2f6d2d9dbd7dfd898d5d9db">[email&#160;protected]</a>
                                    </p>
                                    <p>Phone: 1 (00) 832 2342</p>
                                    <ul>
                                        <li class="facebook">
                                            <a title="Facebook" href="#">
                                                <i class="la la-facebook-f"></i>
                                            </a>
                                        </li>
                                        <li class="twitter">
                                            <a title="Twitter" href="#">
                                                <i class="la la-twitter"></i>
                                            </a>
                                        </li>
                                        <li class="youtube">
                                            <a title="Youtube" href="#">
                                                <i class="la la-youtube"></i>
                                            </a>
                                        </li>
                                        <li class="instagram">
                                            <a title="Instagram" href="#">
                                                <i class="la la-instagram"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </aside>
                            </div>
                        </div>
                    </div>
                    <!-- .top-footer -->
                    <div class="footer__bottom">
                        <p class="footer__bottom__copyright">
                            2020 &copy; <a title="Yuvmedia Team" href="https://yuvmedia.in">Yuvmedia.in</a>. All
                            rights reserved.
                        </p>
                    </div>
                    <!-- .top-footer -->
                </div>
                <!-- .container -->
            </footer>
            <!-- site-footer -->
            <div class="landing-banner business-landing-banner">
                <div class="container">
                    <div class="lb-info">
                        <h2>The Golo App</h2>
                        <p>Download the app and go to travel the world.</p>
                        <div class="lb-button">
                            <a href="#" title="App store"><img src="images/app-store.png" alt="App store" /></a>
                            <a href="#" title="Google play"><img src="images/google-play.png"
                                    alt="Google play" /></a>
                        </div>
                    </div>
                    <!-- .lb-info -->
                </div>
            </div>
            <!-- .landing-banner -->
        </div>
        <!-- #wrapper -->
        <script data-cfasync="false" src="{{ asset('../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js') }}">
        </script> --}}
    </body>

@endsection

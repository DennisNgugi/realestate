@extends('layouts.app')
@section('list')
@foreach($list as $l)
<li><a class="dropdown-item" href="/property_list/{{$l->id}}">{{$l->property_purpose}}</a></li>
@endforeach
@stop

@section('links')
@foreach($s1 as $s)
<li><a class="dropdown-item" href="/services/{{$s->id}}">{{$s->service}}</a></li>
@endforeach
@stop
@section('content')

<!-- Banner start -->
<div class="banner" id="banner">
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <?php $count=0; ?>
          @foreach($img as $i)
          @if($count == 0)
          <?php $key = "active"; ?>
          @else
          <?php $key = ""; ?>
          @endif
            <div class="carousel-item <?php echo $key; ?>">
                <img class="d-block w-100" src="/home-slides/{{$i->slider}}" alt="banner-1">
                <div class="carousel-caption banner-slider-inner d-flex h-100 text-center">
                    <div class="carousel-content container">
                        <div class="text-center">
                            <h1 data-animation="animated fadeInDown delay-05s">Simplified<br/>property solutions</h1>
                            <p data-animation="animated fadeInUp delay-10s">

                            </p>
                          <!--<a data-animation="animated fadeInUp delay-12s" href="#" class="btn btn-lg btn-round btn-white-lg-outline">Get Started Now</a> -->
                        </div>

                    </div>
                </div>
            </div>
            <?php $count++; ?>
            @endforeach
          <!--
            <div class="carousel-item">
                <img class="d-block w-100" style="min-height:400px;" src="/img/banner-2.jpg" alt="banner-2">
                <div class="carousel-caption banner-slider-inner d-flex h-100 text-center">
                    <div class="carousel-content container">
                        <div class="text-center">
                            <h1 data-animation="animated fadeInDown delay-05s">Simplified<br/>property solutions</h1>
                           <p data-animation="animated fadeInUp delay-10s">
                                This is real estate website template based on Bootstrap 4 framework.
                            </p>
                            <a data-animation="animated fadeInUp delay-12s" href="#" class="btn btn-lg btn-round btn-white-lg-outline">Get Started Now</a>
                            <a data-animation="animated fadeInUp delay-12s" href="#" class="btn btn-lg btn-round btn-white-lg-outline">Free Download</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="carousel-item">
                <img class="d-block w-100" src="/img/banner-3.jpg" alt="banner-3">
                <div class="carousel-caption banner-slider-inner d-flex h-100 text-center">
                    <div class="carousel-content container">
                        <div class="text-center">
                            <h1 data-animation="animated fadeInUp delay-05s">Simplified<br/>property solutions</h1>
                          <p data-animation="animated fadeInUp delay-10s">
                                This is real estate website template based on Bootstrap 4 framework.
                            </p>
                          <a data-animation="animated fadeInUp delay-12s" href="#" class="btn btn-lg btn-round btn-white-lg-outline">Get Started Now</a>
                           <a data-animation="animated fadeInUp delay-12s" href="#" class="btn btn-lg btn-round btn-white-lg-outline">Free Download</a>
                        </div>
                    </div>
                </div>
            </div>
          -->
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="slider-mover-left" aria-hidden="true">
                <i class="fa fa-angle-left"></i>
            </span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="slider-mover-right" aria-hidden="true">
                <i class="fa fa-angle-right"></i>
            </span>
        </a>
    </div>
</div>
<!-- banner end

                    <ul class="social-list clearfix">
                        <li><a href="#" class="facebook"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#" class="twitter"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#" class="google"><i class="fa fa-google-plus"></i></a></li>
                        <li><a href="#" class="rss"><i class="fa fa-rss"></i></a></li>
                        <li><a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a></li>
                    </ul>

 -->

<!--
<div class="search-area" id="search-area-1">
    <div class="container">
        <div class="search-area-inner">
            <div class="search-contents ">


                        <form class="" action="index.html" method="post">
                            <div class="row">
                        <div class="col-6 col-lg-3 col-md-3">
                            <div class="form-group">
                                <select class="selectpicker search-fields" name="location" required>
                                    <option>Search Location</option>
                                    @foreach($loc as $l)
                                  <option id="loc{{$l->id}}" value="{{$l->id}}">{{$l->locations}}</option>
                                      @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-6 col-lg-3 col-md-3">
                            <div class="form-group">
                                <select class="selectpicker search-fields" name="category">
                                    <option>Property Types</option>
                                    @foreach($type as $t)
                                    <option id="type{{$t->id}}" value="{{$t->id}}">{{$t->property_type}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                    </div>
                      </form>

                    @section('script')
                      <script>
                        $(document).ready(function(){
                          $('#loc1').click(function(){
                        console.log('data');
                          });
                        });
                      </script>

                    @stop
                    <div class="row">

                        <div class="col-6 col-lg-3 col-md-3">
                            <div class="form-group">
                                <select class="selectpicker search-fields" name="bedrooms">
                                    <option>Bedrooms</option>
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5</option>
                                    <option>6</option>
                                    <option>7</option>
                                    <option>8</option>
                                    <option>9</option>
                                </select>
                            </div>
                        </div>


                        <div class="col-6 col-lg-3 col-md-3">
                            <div class="form-group">
                                <select class="selectpicker search-fields" name="bathrooms">
                                    <option>Bathrooms</option>
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-6 col-lg-3 col-md-3">
                            <div class="form-group">
                                <div class="range-slider">
                                    <div data-min="0" data-max="150000" data-unit="USD" data-min-name="min_price" data-max-name="max_price" class="range-slider-ui ui-slider" aria-disabled="false"></div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 col-lg-3 col-md-3">
                            <div class="form-group">
                                <button class="search-button btn-md btn-color" type="search">Search</button>
                            </div>
                        </div>
                    </div>

            </div>
        </div>
    </div>
</div>
  -->


<!-- Featured properties start -->
<div class="featured-properties content-area-2" id="featured">
    <div class="container">
        <div class="main-title">
            <h1 style="color:white;">Featured Properties</h1>
        </div>
        <!--
        <ul class="list-inline-listing filters filteriz-navigation">
            <li class="active btn filtr-button filtr" data-filter="all">All</li>
            <li data-filter="1" class="btn btn-inline filtr-button filtr">Apartment</li>
            <li data-filter="2" class="btn btn-inline filtr-button filtr">House</li>
            <li data-filter="3" class="btn btn-inline filtr-button filtr">Office</li>
        </ul>-->

            <div class="container">
                <div class="row">
            @foreach($post as $p)
                <div class="col-lg-4 col-md-6 col-sm-12 filtr-item" data-category="3">
                    <div class="property-box">
                        <div class="property-thumbnail">
                            <a href="/property/{{$p->id}}" class="property-img">
                                  @if($p->status == 0)
                                  <div class="tag button alt featured">Available</div>
                                    @else
                                  <div class="tag button alt featured">Booked</div>
                                  @endif
                                    @if($p->propertypurpose->property_purpose == "Sale" )
                                  <div class="tag button alt featured my-5">For Sale</div>
                                      @elseif($p->propertypurpose->property_purpose == "Rent")
                                      <div class="tag button alt featured my-5">For Rent</div>
                                      @else
                                      <div class="tag button alt featured my-5">Short Stay</div>
                                      @endif
                                <div class="price-ratings-box">
                                    <h3 class="price">
                                       {{'Ksh.'.$p->price}}
                                    </h3>

                                </div>

                                <img src="{{url('images/'.$p->featured_image)}}" alt="property-7" class="img-fluid">
                            </a>
                            <!--
                            <div class="property-overlay">
                                <a href="/property/{{$p->id}}" class="overlay-link">
                                    <i class="fa fa-link"></i>
                                </a>
                                <a class="overlay-link property-video" title="Test Title">
                                    <i class="fa fa-video-camera"></i>
                                </a>
                              -->
                                <!--<div class="property-magnify-gallery">
                                    <a href="/property/{{$p->id}}" class="overlay-link">
                                      <i class="fa fa-expand"></i>

                                    </a>

                                    <a href="/img/property-6.jpg" class="hidden"></a>
                                    <a href="/img/property-3.jpg" class="hidden"></a>

                                </div>

                            </div>  -->
                        </div>
                        <div class="detail">
                            <h1 class="title">
                                <a href="/property/{{$p->id}}">{{$p->property_name}}</a>
                            </h1>
                            <div class="location">

                                    <i class="flaticon-facebook-placeholder-for-locate-places-on-maps"></i>{{$p->location->locations}}

                            </div>
                            <ul class="facilities-list clearfix">
                              @if($p->bedrooms == '')
                              <li></li>
                              @else
                                <li>
                                    <i class="flaticon-bed"></i> {{$p->bedrooms}} Bedrooms
                                </li>
                                @endif

                                @if($p->bathrooms == '')
                                <li></li>
                                @else
                                <li>
                                    <i class="flaticon-bath"></i> {{$p->bathrooms}} Bathrooms
                                </li>
                                @endif
                                @if($p->square_foot == '')
                                <li></li>
                                @else
                               <li>
                                    <i class="flaticon-square-layouting-with-black-square-in-east-area"></i> Sq Ft {{$p->square_foot}}
                                </li>
                                @endif
                              @if($p->garage == '')
                                  <li></li>
                                @else
                                <li>
                                    <i class="flaticon-car-repair"></i> {{$p->garage}} Garage
                                </li>
                                @endif
                            </ul>
                        </div>

                        <div class="footer">
                          <h2 style="font-size:16px;">

                                <i class="fa fa-money-bill-alt"></i> {{'Ksh.'.$p->price}}

                            </h2>
                            <!--
                            <span class="mb-5">
                                <a href="#" class="badge badge-secondary">Secondary</a>
                            </span>
                          -->

                        </div>

                    </div>
                </div>
                @endforeach

                  <!--
                <div class="col-lg-4 col-md-6 col-sm-12 filtr-item" data-category="3, 2, 1">
                    <div class="property-box">
                        <div class="property-thumbnail">
                            <a href="properties-details.html" class="property-img">
                                <div class="tag button alt featured">Available</div>
                                <div class="price-ratings-box">
                                    <p class="price">
                                        $178,000
                                    </p>
                                    <div class="ratings">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star-o"></i>
                                    </div>
                                </div>
                                <img src="/img/property-2.jpg" alt="property-2" class="img-fluid">
                            </a>
                            <div class="property-overlay">
                                <a href="properties-details.html" class="overlay-link">
                                    <i class="fa fa-link"></i>
                                </a>
                                <a class="overlay-link property-video" title="Test Title">
                                    <i class="fa fa-video-camera"></i>
                                </a>
                                <div class="property-magnify-gallery">
                                    <a href="/img/property-2.jpg" class="overlay-link">
                                        <i class="fa fa-expand"></i>
                                    </a>
                                    <a href="/img/property-6.jpg" class="hidden"></a>
                                    <a href="/img/property-3.jpg" class="hidden"></a>
                                </div>
                            </div>
                        </div>
                        <div class="detail">
                            <h1 class="title">
                                <a href="properties-details.html">Modern Family Home</a>
                            </h1>
                            <div class="location">
                                <a href="properties-details.html">
                                    <i class="flaticon-facebook-placeholder-for-locate-places-on-maps"></i>Westlands
                                </a>
                            </div>
                            <ul class="facilities-list clearfix">
                                <li>
                                    <i class="flaticon-bed"></i> 3 Bedrooms
                                </li>
                                <li>
                                    <i class="flaticon-bath"></i> 2 Bathrooms
                                </li>
                                <li>
                                    <i class="flaticon-square-layouting-with-black-square-in-east-area"></i> Sq Ft:3400
                                </li>
                                <li>
                                    <i class="flaticon-car-repair"></i> 1 Garage
                                </li>
                            </ul>
                        </div>
                        <div class="footer">
                            <a href="#">
                                <i class="fa fa-user"></i> Jhon Doe
                            </a>
                            <span>
                                <i class="fa fa-calendar-o"></i> 2 years ago
                            </span>
                        </div>
                    </div>
                </div>
              -->
              <!--
                <div class="col-lg-4 col-md-6 col-sm-12 filtr-item" data-category="1, 2">
                    <div class="property-box">
                        <div class="property-thumbnail">
                            <a href="properties-details.html" class="property-img">
                                <div class="tag button alt featured">Available</div>
                                <div class="price-ratings-box">
                                    <p class="price">
                                        $178,000
                                    </p>
                                    <div class="ratings">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star-o"></i>
                                    </div>
                                </div>
                                <img src="/img/property-3.jpg" alt="property-3" class="img-fluid">
                            </a>
                            <div class="property-overlay">
                                <a href="properties-details.html" class="overlay-link">
                                    <i class="fa fa-link"></i>
                                </a>
                                <a class="overlay-link property-video" title="Test Title">
                                    <i class="fa fa-video-camera"></i>
                                </a>
                                <div class="property-magnify-gallery">
                                    <a href="/img/property-3.jpg" class="overlay-link">
                                        <i class="fa fa-expand"></i>
                                    </a>
                                    <a href="/img/property-6.jpg" class="hidden"></a>
                                    <a href="/img/property-1.jpg" class="hidden"></a>
                                </div>
                            </div>
                        </div>
                        <div class="detail">
                            <h1 class="title">
                                <a href="properties-details.html">Beautiful Single Home</a>
                            </h1>
                            <div class="location">
                                <a href="properties-details.html">
                                    <i class="flaticon-facebook-placeholder-for-locate-places-on-maps"></i>Westlands
                                </a>
                            </div>
                            <ul class="facilities-list clearfix">
                                <li>
                                    <i class="flaticon-bed"></i> 3 Bedrooms
                                </li>
                                <li>
                                    <i class="flaticon-bath"></i> 2 Bathrooms
                                </li>
                                <li>
                                    <i class="flaticon-square-layouting-with-black-square-in-east-area"></i> Sq Ft:3400
                                </li>
                                <li>
                                    <i class="flaticon-car-repair"></i> 1 Garage
                                </li>
                            </ul>
                        </div>
                        <div class="footer">
                            <a href="#">
                                <i class="fa fa-user"></i> Jhon Doe
                            </a>
                            <span>
                                <i class="fa fa-calendar-o"></i> 2 years ago
                            </span>
                        </div>
                    </div>
                </div>
              -->
              <!--
                <div class="col-lg-4 col-md-6 col-sm-12 filtr-item" data-category="3, 2">
                    <div class="property-box">
                        <div class="property-thumbnail">
                            <a href="properties-details.html" class="property-img">
                                <div class="tag button alt featured">Available</div>
                                <div class="price-ratings-box">
                                    <p class="price">
                                        $178,000
                                    </p>
                                    <div class="ratings">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star-o"></i>
                                    </div>
                                </div>
                                <img src="/img/property-5.jpg" alt="property-5" class="img-fluid">
                            </a>
                            <div class="property-overlay">
                                <a href="properties-details.html" class="overlay-link">
                                    <i class="fa fa-link"></i>
                                </a>
                                <a class="overlay-link property-video" title="Test Title">
                                    <i class="fa fa-video-camera"></i>
                                </a>
                                <div class="property-magnify-gallery">
                                    <a href="/img/property-5.jpg" class="overlay-link">
                                        <i class="fa fa-expand"></i>
                                    </a>
                                    <a href="/img/property-6.jpg" class="hidden"></a>
                                    <a href="/img/property-3.jpg" class="hidden"></a>
                                </div>
                            </div>
                        </div>
                        <div class="detail">
                            <h1 class="title">
                                <a href="properties-details.html">Real Luxury Villa</a>
                            </h1>
                            <div class="location">
                                <a href="properties-details.html">
                                    <i class="flaticon-facebook-placeholder-for-locate-places-on-maps"></i>Westlands
                                </a>
                            </div>
                            <ul class="facilities-list clearfix">
                                <li>
                                    <i class="flaticon-bed"></i> 3 Bedrooms
                                </li>
                                <li>
                                    <i class="flaticon-bath"></i> 2 Bathrooms
                                </li>
                                <li>
                                    <i class="flaticon-square-layouting-with-black-square-in-east-area"></i> Sq Ft:3400
                                </li>
                                <li>
                                    <i class="flaticon-car-repair"></i> 1 Garage
                                </li>
                            </ul>
                        </div>
                        <div class="footer">
                            <a href="#">
                                <i class="fa fa-user"></i> Jhon Doe
                            </a>
                            <span>
                                <i class="fa fa-calendar-o"></i> 2 years ago
                            </span>
                        </div>
                    </div>
                </div>
              -->
                <!--
                <div class="col-lg-4 col-md-6 col-sm-12 filtr-item" data-category="2, 1">
                    <div class="property-box">
                        <div class="property-thumbnail">
                            <a href="properties-details.html" class="property-img">
                                <div class="tag button alt featured">Available</div>
                                <div class="price-ratings-box">
                                    <p class="price">
                                        $178,000
                                    </p>
                                    <div class="ratings">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star-o"></i>
                                    </div>
                                </div>
                                <img src="/img/property-6.jpg" alt="property-6" class="img-fluid">
                            </a>
                            <div class="property-overlay">
                                <a href="properties-details.html" class="overlay-link">
                                    <i class="fa fa-link"></i>
                                </a>
                                <a class="overlay-link property-video" title="Test Title">
                                    <i class="fa fa-video-camera"></i>
                                </a>
                                <div class="property-magnify-gallery">
                                    <a href="/img/property-6.jpg" class="overlay-link">
                                        <i class="fa fa-expand"></i>
                                    </a>
                                    <a href="/img/property-2.jpg" class="hidden"></a>
                                    <a href="/img/property-3.jpg" class="hidden"></a>
                                </div>
                            </div>
                        </div>
                        <div class="detail">
                            <h1 class="title">
                                <a href="properties-details.html">Masons Villas</a>
                            </h1>
                            <div class="location">
                                <a href="properties-details.html">
                                    <i class="flaticon-facebook-placeholder-for-locate-places-on-maps"></i>Westlands
                                </a>
                            </div>
                            <ul class="facilities-list clearfix">
                                <li>
                                    <i class="flaticon-bed"></i> 3 Bedrooms
                                </li>
                                <li>
                                    <i class="flaticon-bath"></i> 2 Bathrooms
                                </li>
                                <li>
                                    <i class="flaticon-square-layouting-with-black-square-in-east-area"></i> Sq Ft:3400
                                </li>
                                <li>
                                    <i class="flaticon-square-layouting-with-black-square-in-east-area"></i> 1 Garage
                                </li>
                            </ul>
                        </div>
                        <div class="footer">
                            <a href="#">
                                <i class="fa fa-user"></i> Jhon Doe
                            </a>
                            <span>
                                <i class="fa fa-calendar-o"></i> 2 years ago
                            </span>
                        </div>
                    </div>
                </div>
              -->
              <!--
                <div class="col-lg-4 col-md-6 col-sm-12 filtr-item" data-category="3, 1, 2">
                    <div class="property-box">
                        <div class="property-thumbnail">
                            <a href="properties-details.html" class="property-img">
                                <div class="tag button alt featured">Available</div>
                                <div class="price-ratings-box">
                                    <p class="price">
                                        $178,000
                                    </p>
                                    <div class="ratings">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star-o"></i>
                                    </div>
                                </div>
                                <img src="/img/property-1.jpg" alt="property-1" class="img-fluid">
                            </a>
                            <div class="property-overlay">
                                <a href="properties-details.html" class="overlay-link">
                                    <i class="fa fa-link"></i>
                                </a>
                                <a class="overlay-link property-video" title="Test Title">
                                    <i class="fa fa-video-camera"></i>
                                </a>
                                <div class="property-magnify-gallery">
                                    <a href="/img/property-1.jpg" class="overlay-link">
                                        <i class="fa fa-expand"></i>
                                    </a>
                                    <a href="/img/property-6.jpg" class="hidden"></a>
                                    <a href="/img/property-3.jpg" class="hidden"></a>
                                </div>
                            </div>
                        </div>
                        <div class="detail">
                            <h1 class="title">
                                <a href="properties-details.html">Sweet Family Home</a>
                            </h1>
                            <div class="location">
                                <a href="properties-details.html">
                                    <i class="flaticon-facebook-placeholder-for-locate-places-on-maps"></i>Westlands
                                </a>
                            </div>
                            <ul class="facilities-list clearfix">
                                <li>
                                    <i class="flaticon-bed"></i> 3 Bedrooms
                                </li>
                                <li>
                                    <i class="flaticon-bath"></i> 2 Bathrooms
                                </li>
                                <li>
                                    <i class="flaticon-square-layouting-with-black-square-in-east-area"></i> Sq Ft:3400
                                </li>
                                <li>
                                    <i class="flaticon-square-layouting-with-black-square-in-east-area"></i> 1 Garage
                                </li>
                            </ul>
                        </div>
                        <div class="footer">
                            <a href="#">
                                <i class="fa fa-user"></i> Jhon Doe
                            </a>
                            <span>
                                <i class="fa fa-calendar-o"></i> 2 years ago
                            </span>
                        </div>
                    </div>
                </div>
              -->
            </div>
            <a href="/all_properties" class="btn btn-info">View More Properties</a>

        </div>
    </div>
</div>


<!-- Featured properties end -->

<!-- services start
<div class="services content-area-17">
    <div class="container">
        <div class="main-title">
            <h1>What Are you Looking For?</h1>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-6 col-sm-6 wow fadeInUp delay-04s">
                <div class="media services-info">
                    <i class="flaticon-hotel-building"></i>
                    <div class="media-body">
                        <h5>Apartments</h5>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6 wow fadeInUp delay-04s">
                <div class="media services-info">
                    <i class="flaticon-house"></i>
                    <div class="media-body">
                        <h5>Houses</h5>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6 wow fadeInUp delay-04s">
                <div class="media services-info">
                    <i class="flaticon-padlock"></i>
                    <div class="media-body">
                        <h5>Security</h5>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6 wow fadeInUp delay-04s">
                <div class="media services-info">
                    <i class="flaticon-call-center-agent"></i>
                    <div class="media-body">
                        <h5 class="mt-0">Support 24/7</h5>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6 wow fadeInUp delay-04s">
                <div class="media services-info">
                    <i class="flaticon-agreement"></i>
                    <div class="media-body">
                        <h5>Trusted Agents</h5>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6 wow fadeInUp delay-04s">
                <div class="media services-info">
                    <i class="flaticon-office-block"></i>
                    <div class="media-body">
                        <h5>Commercial</h5>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
 services end -->

<!-- Recent Properties start
<div class="recent-properties content-area">
    <div class="container">
        <div class="main-title">
            <h1>Recent Properties</h1>
        </div>
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6 wow fadeInLeft delay-04s">
                <div class="card property-box-2">

                    <div class="property-thumbnail">
                        <a href="properties-details.html" class="property-img">
                            <img src="/img/property-3.jpg" alt="property-3" class="img-fluid">
                        </a>
                        <div class="property-overlay">
                            <a href="properties-details.html" class="overlay-link">
                                <i class="fa fa-link"></i>
                            </a>
                            <a class="overlay-link property-video" title="Test Title">
                                <i class="fa fa-video-camera"></i>
                            </a>
                            <div class="property-magnify-gallery">
                                <a href="/img/property-3.jpg" class="overlay-link">
                                    <i class="fa fa-expand"></i>
                                </a>
                                <a href="/img/property-7.jpg" class="hidden"></a>
                                <a href="/img/property-6.jpg" class="hidden"></a>
                            </div>
                        </div>
                    </div>

                    <div class="detail">
                        <h5 class="title"><a href="properties-details.html">Modern Family Home</a></h5>
                        <h4 class="price">
                            $567.99/Night
                        </h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 wow fadeInUp delay-04s">
                <div class="card property-box-2">

                    <div class="property-thumbnail">
                        <a href="properties-details.html" class="property-img">
                            <img src="/img/property-7.jpg" alt="property-7" class="img-fluid">
                        </a>
                        <div class="property-overlay">
                            <a href="properties-details.html" class="overlay-link">
                                <i class="fa fa-link"></i>
                            </a>
                            <a class="overlay-link property-video" title="Test Title">
                                <i class="fa fa-video-camera"></i>
                            </a>
                            <div class="property-magnify-gallery">
                                <a href="/img/property-7.jpg" class="overlay-link">
                                    <i class="fa fa-expand"></i>
                                </a>
                                <a href="/img/property-4.jpg" class="hidden"></a>
                                <a href="/img/property-3.jpg" class="hidden"></a>
                            </div>
                        </div>
                    </div>

                    <div class="detail">
                        <h5 class="title"><a href="properties-details.html">Relaxing Apartment</a></h5>
                        <h4 class="price">
                            $567.99/Night
                        </h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 wow fadeInUp delay-04s">
                <div class="card property-box-2">

                    <div class="property-thumbnail">
                        <a href="properties-details.html" class="property-img">
                            <img src="/img/property-5.jpg" alt="property-5" class="img-fluid">
                        </a>
                        <div class="property-overlay">
                            <a href="properties-details.html" class="overlay-link">
                                <i class="fa fa-link"></i>
                            </a>
                            <a class="overlay-link property-video" title="Test Title">
                                <i class="fa fa-video-camera"></i>
                            </a>
                            <div class="property-magnify-gallery">
                                <a href="/img/property-5.jpg" class="overlay-link">
                                    <i class="fa fa-expand"></i>
                                </a>
                                <a href="/img/property-7.jpg" class="hidden"></a>
                                <a href="/img/property-6.jpg" class="hidden"></a>
                            </div>
                        </div>
                    </div>

                    <div class="detail">
                        <h5 class="title"><a href="properties-details.html">Masons Villas</a></h5>
                        <h4 class="price">
                            $567.99/Night
                        </h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 wow fadeInRight delay-04s">
                <div class="card property-box-2">

                    <div class="property-thumbnail">
                        <a href="properties-details.html" class="property-img">
                            <img src="/img/property-1.jpg" alt="property-1" class="img-fluid">
                        </a>
                        <div class="property-overlay">
                            <a href="properties-details.html" class="overlay-link">
                                <i class="fa fa-link"></i>
                            </a>
                            <a class="overlay-link property-video" title="Test Title">
                                <i class="fa fa-video-camera"></i>
                            </a>
                            <div class="property-magnify-gallery">
                                <a href="/img/property-1.jpg" class="overlay-link">
                                    <i class="fa fa-expand"></i>
                                </a>
                                <a href="/img/property-7.jpg" class="hidden"></a>
                                <a href="/img/property-3.jpg" class="hidden"></a>
                            </div>
                        </div>
                    </div>

                    <div class="detail">
                        <h5 class="title"><a href="properties-details.html">Sweet Family Home</a></h5>
                        <h4 class="price">
                            $567.99/Night
                        </h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
Recent Properties end -->

<!-- Most popular places start
<div class="most-popular-places content-area-3">
    <div class="container">
        <div class="main-title">
            <h1>Most Popular Places</h1>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-7 col-md-12">
                    <div class="row">
                        <div class="col-md-12 col-pad wow fadeInLeft delay-04s">
                            <div class="overview overview-box">
                                <img src="/img/popular-places/popular-places.jpg" alt="popular-places">
                                <div class="mask">
                                    <h2>New York</h2>
                                    <p>14 Properties</p>
                                    <a href="properties-details.html" class="btn btn-border">Read more</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6 col-pad wow fadeInUp delay-04s">
                            <div class="overview overview-box">
                                <img src="/img/popular-places/popular-places-2.jpg" alt="popular-places-2">
                                <div class="mask">
                                    <h2>Canada</h2>
                                    <p>25 Properties</p>
                                    <a href="properties-details.html" class="btn btn-border">Read more</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6 col-pad wow fadeInUp delay-04s">
                            <div class="overview overview-box">
                                <img src="/img/popular-places/popular-places-4.jpg" alt="popular-places-4">
                                <div class="mask">
                                    <h2>California</h2>
                                    <p>12 Properties</p>
                                    <a href="properties-details.html" class="btn btn-border">Read more</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 col-md-12 col-pad wow fadeInRight delay-04s">
                    <div class="overview aa overview-box">
                        <img src="/img/popular-places/popular-places-3.jpg" alt="popular-places-3" class="big-img">
                        <div class="mask">
                            <h2>Florida</h2>
                            <p>45 Properties</p>
                            <a href="properties-details.html" class="btn btn-border">Read more</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
 Most popular places end -->

<!-- Agent start
<div class="agent content-area wow fadeInUp delay-04s">
    <div class="container">
        <div class="main-title">
            <h1>Agent</h1>
        </div>
        <div class="row">
            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 wow fadeInLeft delay-04s">
                <div class="agent-2">
                    <div class="agent-photo">
                        <a href="agent-detail.html">
                            <img src="/img/avatar/avatar-5.jpg" alt="avatar-5" class="img-fluid">
                        </a>
                    </div>
                    <div class="agent-details">
                        <h5><a href="agent-detail.html">Martin Smith</a></h5>
                        <p>Web Developer</p>
                        <ul class="social-list clearfix">
                            <li><a href="#" class="facebook"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#" class="twitter"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#" class="instagram"><i class="fa fa-instagram"></i></a></li>
                            <li><a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 wow fadeInLeft delay-04s">
                <div class="agent-2">
                    <div class="agent-photo">
                        <a href="agent-detail.html">
                            <img src="/img/avatar/avatar-6.jpg" alt="avatar-6" class="img-fluid">
                        </a>
                    </div>
                    <div class="agent-details">
                        <h5><a href="agent-detail.html">John Pitarshon</a></h5>
                        <p>Creative Director</p>
                        <ul class="social-list clearfix">
                            <li><a href="#" class="facebook"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#" class="twitter"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#" class="instagram"><i class="fa fa-instagram"></i></a></li>
                            <li><a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 wow fadeInRight delay-04s">
                <div class="agent-2">
                    <div class="agent-photo">
                        <a href="agent-detail.html">
                            <img src="/img/avatar/avatar-7.jpg" alt="avatar-7" class="img-fluid">
                        </a>
                    </div>
                    <div class="agent-details">
                        <h5><a href="agent-detail.html">Maria Blank</a></h5>
                        <p>Office Manager</p>
                        <ul class="social-list clearfix">
                            <li><a href="#" class="facebook"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#" class="twitter"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#" class="instagram"><i class="fa fa-instagram"></i></a></li>
                            <li><a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 wow fadeInRight delay-04s">
                <div class="agent-2">
                    <div class="agent-photo">
                        <a href="agent-detail.html">
                            <img src="/img/avatar/avatar-11.jpg" alt="avatar-11" class="img-fluid">
                        </a>
                    </div>
                    <div class="agent-details">
                        <h5><a href="agent-detail.html">Karen Paran</a></h5>
                        <p>Support Manager</p>
                        <ul class="social-list clearfix">
                            <li><a href="#" class="facebook"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#" class="twitter"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#" class="instagram"><i class="fa fa-instagram"></i></a></li>
                            <li><a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div >
 Agent end -->

<!-- Testimonial start
<div class="testimonial overview-bgi wow fadeInUp delay-04s" style="background-image: url(/img/testimonial-property-2.jpg)">
    <div class="container">
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="testimonial-inner">
                    <header class="testimonia-header">
                        <h1>Testimonial</h1>
                    </header>
                    <div id="carouselExampleIndicators2" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#carouselExampleIndicators2" data-slide-to="0" class="active"></li>
                            <li data-target="#carouselExampleIndicators2" data-slide-to="1"></li>
                            <li data-target="#carouselExampleIndicators2" data-slide-to="2"></li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <div class="avatar">
                                    <img src="/img/avatar/avatar.jpg" alt="avatar" class="img-fluid rounded-circle">
                                </div>
                                <p class="lead">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                </p>
                                <div class="author-name">
                                    Martin Smith
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="avatar">
                                    <img src="/img/avatar/avatar-2.jpg" alt="avatar-2" class="img-fluid rounded-circle">
                                </div>
                                <p class="lead">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                </p>
                                <div class="author-name">
                                    Emma Connor
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="avatar">
                                    <img src="/img/avatar/avatar-3.jpg" alt="avatar-3" class="img-fluid rounded-circle">
                                </div>
                                <p class="lead">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                </p>
                                <div class="author-name">
                                    John Antony
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
Testimonial end -->

<!-- Blog 2 start
<div class="blog-2 content-area-2 wow fadeInUp delay-04s">
    <div class="container">
        <div class="main-title">
            <h1>Blog</h1>
        </div>
        <div class="row">
            <div class="col-lg-6 col-md-6">
                <div class="row blog-list">
                    <div class="col-lg-5 col-md-12 col-pad ">
                        <div class="photo">
                            <img src="/img/blog/blog-6.jpg" alt="blog-4" class="img-fluid fit-cover h-100">
                            <div class="date-box">
                                <h5>03</h5>
                                <h5>May</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-7 col-md-12 col-pad align-self-center">
                        <div class="detail">
                            <h3>
                                <a href="blog-single-sidebar-right.html">Buying a Home</a>
                            </h3>
                            <div class="post-meta">
                                <span><a href="#"><i class="fa fa-user"></i>John Antony</a></span>
                                <span><a href="#"><i class="fa fa-clock-o"></i>7 Comment</a></span>
                            </div>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6">
                <div class="row blog-list">
                    <div class="col-lg-5 col-md-12 col-pad ">
                        <div class="photo">
                            <img src="/img/blog/blog-5.jpg" alt="blog-5" class="img-fluid fit-cover h-100">
                            <div class="date-box">
                                <h5>03</h5>
                                <h5>May</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-7 col-md-12 col-pad align-self-center">
                        <div class="detail">
                            <h3>
                                <a href="blog-single-sidebar-right.html">Selling Your Home</a>
                            </h3>
                            <div class="post-meta">
                                <span><a href="#"><i class="fa fa-user"></i>John Antony</a></span>
                                <span><a href="#"><i class="fa fa-clock-o"></i>7 Comment</a></span>
                            </div>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
 Blog 2 start -->

<!-- intro section start
<div class="intro-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-2 col-sm-12">
                <img src="/img/logos/logo-white.png" alt="loo">
            </div>
            <div class="col-lg-7 col-md-7 col-sm-12">
                <div class="intro-text">
                    <h3>Looking To Sell Or Rent Your Property?</h3>
                </div>
            </div>
            <div class="col-lg-2 col-md-3 col-sm-12">
                <a href="#" class="btn btn-md">Submit Now</a>
            </div>
        </div>
    </div>
</div>
 intro section end -->
@stop
<!-- Footer start -->

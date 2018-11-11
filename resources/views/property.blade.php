@extends('layouts.app')
@section('list')
@foreach($pst as $l)
<li><a class="dropdown-item" href="/property_list/{{$l->id}}">{{$l->property_purpose}}</a></li>
@endforeach
@stop
@section('links')
@foreach($s2 as $s)
<li><a class="dropdown-item" href="/services/{{$s->id}}">{{$s->service}}</a></li>
@endforeach
@stop
@section('content')

<!-- Sub banner start -->
<div class="sub-banner overview-bgi">
    <div class="container">
        <div class="breadcrumb-area">
            <h1>Properties</h1>

        </div>
    </div>
</div>
<!-- Sub banner end -->

<!-- Properties details page start -->
<div class="properties-details-page content-area-15">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-12 col-xs-12 slider">
              <div class="heading-properties">
                  <div class="row">
                      <div class="col-md-12">
                        @include('partials.success2')
                        @include('partials.errors')
                          <div class="pull-left">
                              <h3>{{$post->property_name}}</h3>
                              <p><i class="fa fa-map-marker"> {{$post->location->locations}}</i></p>
                          </div>
                          <div class="p-r">
                              <h3>{{"Ksh.".$post->price}}</h3>
                              </div>
                      </div>
                  </div>
              </div>

      <div id="propertiesDetailsSlider" class="carousel properties-details-sliders slide mb-60">
                    <!-- main slider carousel items -->

                    <!--
                    main slider carousel items-->

                    <!--main slider carousel nav controls-->
                    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">

<ol class="carousel-indicators">

@foreach($image as $img)

<li data-target="#carouselExampleIndicators" data-slide-to="{{ $loop->index }}" class="{{ $loop->first ? 'active' : '' }}"></li>

@endforeach

</ol>



<div class="carousel-inner">

@foreach($image as $ig)

<div class="carousel-item {{ $loop->first ? 'active' : '' }} ">

<img class="d-block w-100" src="{{url('slides/'.$ig->images)}}" alt="First slide">

</div>


@endforeach

</div>

<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">

<span class="carousel-control-prev-icon" aria-hidden="true"></span>

<span class="sr-only">Previous</span>
</a>

<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">

<span class="carousel-control-next-icon" aria-hidden="true"></span>

<span class="sr-only">Next</span>
</a>

</div>


                </div>


                <!-- Tabbing box start -->
                <div class="tabbing tabbing-box mb-60">
                  <!--
                    <ul class="nav nav-tabs" id="carTab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active show" id="one-tab" data-toggle="tab" href="#one" role="tab" aria-controls="one" aria-selected="false">Description</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" id="two-tab" data-toggle="tab" href="#two" role="tab" aria-controls="two" aria-selected="false">Floor Plans</a>
                        </li>
                      -->
                          <!--
                        <li class="nav-item">
                            <a class="nav-link" id="two-tab" data-toggle="tab" href="#two" role="tab" aria-controls="two" aria-selected="true">Details</a>
                        </li>
                      -->
                      <!--
                        <li class="nav-item">
                            <a class="nav-link" id="4-tab" data-toggle="tab" href="#4" role="tab" aria-controls="4" aria-selected="true">Video</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" id="5-tab" data-toggle="tab" href="#5" role="tab" aria-controls="5" aria-selected="true">Location</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="6-tab" data-toggle="tab" href="#6" role="tab" aria-controls="6" aria-selected="true">Related Properties</a>
                        </li>
                      -->
                    </ul>
                  <!--  <a href="/details/{{$post->id}}" class="btn btn-info">Print Details</a>-->
                    <a href="/print/{{$post->id}}" class="btn btn-info" id="print">Print details</a>

                    <div class="tab-content" id="carTabContent">
                        <div class="tab-pane active show" id="one" role="tabpanel" aria-labelledby="one-tab">
                            <h3 class="heading">Property Description</h3>
                           <p>{{$post->description}}</p>

                        </div>
                        <!--
                        <div class="tab-pane fade" id="two" role="tabpanel" aria-labelledby="two-tab">
                            <div class="floor-plans mb-60">
                                <h3 class="heading">Floor Plans</h3>
                                <table>
                                    <tbody><tr>
                                        <td><strong>Size</strong></td>
                                        <td><strong>Rooms</strong></td>
                                        <td><strong>2 Bathrooms</strong></td>
                                    </tr>
                                    <tr>
                                        <td>1600</td>
                                        <td>3</td>
                                        <td>2</td>
                                    </tr>
                                    </tbody>
                                </table>
                                <img src="/img/floor-plans.png" alt="floor-plans" class="img-fluid">
                            </div>
                        </div>
                      -->
                        <div class="tab-pane fade " id="two" role="tabpanel" aria-labelledby="two-tab">
                            <div class="property-details">
                                <h3 class="heading">Property Details</h3>
                                <div class="row">
                                    <div class="col-md-4 col-sm-6">
                                        <ul>
                                            <li>
                                                <strong>Property Id:</strong>{{$post->id}}
                                            </li>
                                            <li>
                                                <strong>Price:</strong>{{"Ksh.".$post->price}}
                                            </li>
                                            <li>
                                                <strong>Property Type:</strong>{{$post->propertytype->property_type}}
                                            </li>
                                            <li>
                                                <strong>Property Purpose:</strong>{{$post->propertypurpose->property_purpose}}
                                            </li>
                                            @if($post->bathrooms == "")
                                              <li></li>
                                            @else
                                            <li>
                                                <strong>Bathrooms:</strong>{{$post->bathrooms}}
                                            </li>
                                            @endif
                                            @if($post->garage == "")
                                              <li></li>
                                            @else
                                            <li>
                                                <strong>Bedrooms:</strong>{{$post->bedrooms}}
                                            </li>
                                            @endif
                                        </ul>
                                    </div>
                                    <div class="col-md-4 col-sm-6">
                                        <ul>
                                            <!--<li>
                                                <strong>Property Lot Size:</strong>800 ft2
                                            </li>
                                            <li>
                                                <strong>Land area:</strong>230 ft2
                                            </li>
                                            <li>
                                                <strong>Year Built:</strong>2018
                                            </li>
                                          -->
                                          @if($post->propertypurpose->property_purpose == "rent")
                                            <li>
                                                <strong>Available From:</strong>2018
                                            </li>
                                            @else
                                              <li></li>
                                              @endif
                                            @if($post->garage == "")
                                              <li></li>
                                            @else
                                            <li>
                                                <strong>Garages:</strong>{{$post->garage}}
                                            </li>
                                            @endif
                                        </ul>
                                    </div>
                                    <!--
                                    <div class="col-md-4 col-sm-6">
                                        <ul>
                                            <li>
                                                <strong>Sold:</strong>Yes
                                            </li>
                                            <li>
                                                <strong>City:</strong>Usa
                                            </li>
                                            <li>
                                                <strong>Parking:</strong>Yes
                                            </li>
                                            <li>
                                                <strong>Property Owner:</strong>Sohel Rana
                                            </li>
                                            <li>
                                                <strong>Zip Code: </strong>2451
                                            </li>
                                        </ul>
                                    </div>
                                  -->
                                </div>
                            </div>
                        </div>
                        <!--
                        <div class="tab-pane fade " id="4" role="tabpanel" aria-labelledby="4-tab">
                            <div class="property-video">
                                <h3 class="heading">Property Vedio</h3>
                                <iframe src="https://www.youtube.com/embed/m5_AKjDdqaU"></iframe>
                            </div>
                        </div>
                      -->
                      <!--
                        <div class="tab-pane fade " id="5" role="tabpanel" aria-labelledby="5-tab">
                            <div class="section location">
                                <h3 class="heading">Property Location</h3>
                                <div class="map">
                                    <div id="contactMap" class="contact-map"></div>
                                </div>
                            </div>
                        </div>
                      -->
                    <!--
                        <div class="tab-pane fade " id="6" role="tabpanel" aria-labelledby="6-tab">
                            <div class="related-properties">
                                <h3 class="heading">Related Properties</h3>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="property-box">
                                            <div class="property-thumbnail">
                                                <a href="properties-details.html" class="property-img">
                                                    <div class="tag button alt featured">Featured</div>
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
                                                        <a href="/img/property-4.jpg" class="hidden"></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="detail">
                                                <h1 class="title">
                                                    <a href="properties-details.html">Modern Family Home</a>
                                                </h1>
                                                <div class="location">
                                                    <a href="properties-details.html">
                                                        <i class="fa fa-map-marker"></i>123 Kathal St. Tampa City,
                                                    </a>
                                                </div>
                                                <ul class="facilities-list clearfix">
                                                    <li>
                                                        <i class="flaticon-square-layouting-with-black-square-in-east-area"></i> 3 Bedrooms
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
                                    <div class="col-md-6">
                                        <div class="property-box">
                                            <div class="property-thumbnail">
                                                <a href="properties-details.html" class="property-img">
                                                    <div class="tag button alt featured">Featured</div>
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
                                                        <a href="/img/property-6.jpg" class="hidden"></a>
                                                        <a href="/img/property-4.jpg" class="hidden"></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="detail">
                                                <h1 class="title">
                                                    <a href="properties-details.html">Relaxing Apartment</a>
                                                </h1>
                                                <div class="location">
                                                    <a href="properties-details.html">
                                                        <i class="fa fa-map-marker"></i>123 Kathal St. Tampa City,
                                                    </a>
                                                </div>
                                                <ul class="facilities-list clearfix">
                                                    <li>
                                                        <i class="flaticon-square-layouting-with-black-square-in-east-area"></i> 3 Bedrooms
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
                                </div>
                            </div>
                        </div>
                      -->
                    </div>
                </div>
                <div class="amenities-box mb-60">
                  <div class="property-details">
                      <h3 class="heading">Property Details</h3>
                      <div class="row">
                          <div class="col-md-4 col-sm-6">
                              <ul>
                                  <li>
                                      <strong>Property Id:</strong>{{$post->id}}
                                  </li>
                                  <li>
                                      <strong>Price:</strong>{{"Ksh.".$post->price}}
                                  </li>
                                  <li>
                                      <strong>Property Type:</strong>{{$post->propertytype->property_type}}
                                  </li>
                                  <li>
                                      <strong>Property Purpose:</strong>{{$post->propertypurpose->property_purpose}}
                                  </li>
                                  @if($post->bathrooms == "")
                                    <li></li>
                                  @else
                                  <li>
                                      <strong>Bathrooms:</strong>{{$post->bathrooms}}
                                  </li>
                                  @endif
                                  @if($post->garage == "")
                                    <li></li>
                                  @else
                                  <li>
                                      <strong>Bedrooms:</strong>{{$post->bedrooms}}
                                  </li>
                                  @endif
                              </ul>
                          </div>
                          <div class="col-md-4 col-sm-6">
                              <ul>
                                  <!--<li>
                                      <strong>Property Lot Size:</strong>800 ft2
                                  </li>
                                  <li>
                                      <strong>Land area:</strong>230 ft2
                                  </li>
                                  <li>
                                      <strong>Year Built:</strong>2018
                                  </li>
                                -->
                                @if($post->propertypurpose->property_purpose == "rent")
                                  <li>
                                      <strong>Available From:</strong>2018
                                  </li>
                                  @else
                                    <li></li>
                                    @endif
                                  @if($post->garage == "")
                                    <li></li>
                                  @else
                                  <li>
                                      <strong>Garages:</strong>{{$post->garage}}
                                  </li>
                                  @endif
                              </ul>
                          </div>
                          <!--
                          <div class="col-md-4 col-sm-6">
                              <ul>
                                  <li>
                                      <strong>Sold:</strong>Yes
                                  </li>
                                  <li>
                                      <strong>City:</strong>Usa
                                  </li>
                                  <li>
                                      <strong>Parking:</strong>Yes
                                  </li>
                                  <li>
                                      <strong>Property Owner:</strong>Sohel Rana
                                  </li>
                                  <li>
                                      <strong>Zip Code: </strong>2451
                                  </li>
                              </ul>
                          </div>
                        -->
                      </div>
                  </div>
                </div>
                <!-- Amenities box start -->
                <div class="amenities-box mb-60">
                    <h3 class="heading">Condition</h3>
                    <div class="row">
                        <div class="col-md-4 col-sm-6">
                            <ul>
                              @if($post->bedrooms == "")
                                <li></li>
                                @else
                                <li><span><i class="flaticon-bed"></i> {{$post->bedrooms}} Beds</span></li>
                                @endif
                                  @if($post->bathrooms == "")
                                  <li></li>
                                  @else
                                <li><span><i class="flaticon-bath"></i> {{$post->bathrooms}} Bathroom</span></li>
                                @endif
                            </ul>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <ul>
                              @if($post->garage == "")
                              <li></li>
                              @else
                                <li><span><i class="flaticon-car-repair"></i> {{$post->garage}} Garage</span></li>
                                @endif
                                <!--
                                <li><span><i class="flaticon-balcony-and-door"></i>1 Balcony</span></li>
                              -->
                            </ul>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <!--<ul>
                                <li><span><i class="flaticon-square-layouting-with-black-square-in-east-area"></i> 4800 sq ft</span></li>
                                <li><span><i class="flaticon-monitor"></i> TV</span></li>
                            </ul>
                          -->
                        </div>
                    </div>
                </div>


                <!-- Features opions start
                <div class="features-opions mb-60">
                    <h3 class="heading">Features</h3>
                    <div class="row">
                        <div class="col-md-4 col-sm-6">
                            <ul>
                                <li>
                                    <i class="flaticon-air-conditioner"></i>
                                    Air conditioning
                                </li>
                                <li>
                                    <i class="flaticon-wifi-connection-signal-symbol"></i>
                                    Wifi
                                </li>
                                <li>
                                    <i class="flaticon-swimmer"></i>
                                    Swimming Pool
                                </li>
                                <li>
                                    <i class="flaticon-bed"></i>
                                    Double Bed
                                </li>
                                <li>
                                    <i class="flaticon-balcony-and-door"></i>
                                    Balcony
                                </li>

                            </ul>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <ul>
                                <li>
                                    <i class="flaticon-old-typical-phone"></i>
                                    Telephone
                                </li>
                                <li>
                                    <i class="flaticon-car-repair"></i>
                                    Garage
                                </li>
                                <li>
                                    <i class="flaticon-parking"></i>
                                    Parking
                                </li>
                                <li>
                                    <i class="flaticon-monitor"></i>
                                    TV
                                </li>
                                <li>
                                    <i class="flaticon-theatre-masks"></i>
                                    Home Theater
                                </li>
                            </ul>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <ul>
                                <li>
                                    <i class="fa fa-clock-o"></i>
                                    Alarm
                                </li>
                                <li>
                                    <i class="flaticon-padlock"></i>
                                    Security
                                </li>
                                <li>
                                    <i class="flaticon-weightlifting"></i>
                                    Gym
                                </li>
                                <li>
                                    <i class="flaticon-idea"></i>
                                    Electric Range
                                </li>
                                <li>
                                    <i class="flaticon-green-park-city-space"></i>
                                    Private space
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
              -->

              <div class="col-lg-12 col-md-6 col-xs-12">
                @include('partials.success')
                @include('partials.errors')
                    <h5>Inquiry form</h5>
                    <form  action="/property/{{$post->id}}" method="POST">
                      @csrf
                      <input type="hidden" name="p_id"  class="form-control" value="{{$post->id}}">
                        <div class="form-group">
                            <label>First name</label>
                              <input type="text" id="first" name="firstname" class="form-control" value="">

                        </div>
                        <div class="form-group">
                            <label>Last name</label>
                          <input type="text" name="lastname" class="form-control" value="">
                        </div>
                        <div class="form-group">
                            <label>Email</label>
                              <input type="text" name="email" class="form-control" value="">
                        </div>
                        <div class="form-group">
                            <label>Mobile no</label>
                          <input type="text" name="mobile" class="form-control" value="">
                        </div>
                        <div class="form-group">
                            <label>Message</label>
                          <textarea name="message" class="form-control" rows="8" cols="8"> </textarea>
                        </div>

                        <input type="submit" name="Submit" id="submit" class="btn btn-info" value="Submit">

                    </form>
                    @section('script2')
                    <script>
                      $(document).ready(function(){
                        $('#submit').click(function(event){
                          var name = $('#first').val();
                          console.log(name);
                        });
                      });
                        </script>
                    @stop

                        </div>
                    </div>
                </div>
              </div>
            </div>




                <!-- Comments section start
                <div class="comments-section">
                    <h3 class="heading">Comments Section</h3>
                    <ul class="comments">
                        <li>
                            <div class="comment">
                                <div class="comment-author">
                                    <a href="#">
                                        <img src="/img/avatar/avatar-13.jpg" class="rounded-circle" alt="avatar-13">
                                    </a>
                                </div>
                                <div class="comment-content">
                                    <div class="comment-meta">
                                        <div class="comment-meta-author">
                                            Jane Doe
                                        </div>
                                        <div class="comment-meta-reply">
                                            <a href="#">Reply</a>
                                        </div>
                                        <div class="comment-meta-date">
                                            <span>8:42 PM 10/3/2018</span>
                                        </div>
                                    </div>
                                    <div class="clearfix"></div>
                                    <div class="comment-body">
                                        <div class="comment-rating">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star-o"></i>
                                        </div>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec luctus tincidunt aliquam. Aliquam gravida massa at sem vulputate interdum et vel eros. Maecenas eros enim, tincidunt vel turpis vel, dapibus tempus nulla. Donec vel nulla dui. Pellentesque sed ante sed.</p>
                                    </div>
                                </div>
                            </div>
                            <ul>
                                <li>
                                    <div class="comment">
                                        <div class="comment-author">
                                            <a href="#">
                                                <img src="/img/avatar/avatar-13.jpg" class="rounded-circle" alt="avatar-13">
                                            </a>
                                        </div>

                                        <div class="comment-content">
                                            <div class="comment-meta">
                                                <div class="comment-meta-author">
                                                    Jane Doe
                                                </div>

                                                <div class="comment-meta-reply">
                                                    <a href="#">Reply</a>
                                                </div>

                                                <div class="comment-meta-date">
                                                    <span>8:42 PM 10/3/2018</span>
                                                </div>
                                            </div>
                                            <div class="clearfix"></div>
                                            <div class="comment-body">
                                                <div class="comment-rating">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star-half-o"></i>
                                                    <i class="fa fa-star-o"></i>
                                                </div>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec luctus tincidunt aliquam. Aliquam gravida massa at sem vulputate interdum et vel eros. Maecenas eros enim, tincidunt vel turpis vel, dapibus tempus nulla. Donec vel nulla dui.</p>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <div class="comment">
                                <div class="comment-author">
                                    <a href="#">
                                        <img src="/img/avatar/avatar-13.jpg" class="rounded-circle" alt="avatar-13">
                                    </a>
                                </div>
                                <div class="comment-content">
                                    <div class="comment-meta">
                                        <div class="comment-meta-author">
                                            Jane Doe
                                        </div>
                                        <div class="comment-meta-reply">
                                            <a href="#">Reply</a>
                                        </div>
                                        <div class="comment-meta-date">
                                            <span>8:42 PM 10/3/2018</span>
                                        </div>
                                    </div>
                                    <div class="clearfix"></div>
                                    <div class="comment-body">
                                        <div class="comment-rating">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star-o"></i>
                                        </div>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec luctus tincidunt aliquam. Aliquam gravida massa at sem vulputate interdum et vel eros. Maecenas eros enim, tincidunt vel turpis vel, dapibus tempus nulla. Donec vel nulla dui. Pellentesque.</p>
                                    </div>
                                </div>
                            </div>

                        </li>
                    </ul>
                </div>
              -->
                <!-- Contact 1 start
                <div class="contact-3 mb-60">
                    <h3 class="heading">Leave a Comment</h3>
                    <div class="container">
                        <div class="row">
                            <form action="#" method="GET" enctype="multipart/form-data">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                        <div class="form-group name">
                                            <input type="text" name="name" class="form-control" placeholder="Name">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                        <div class="form-group email">
                                            <input type="email" name="email" class="form-control" placeholder="Email">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                        <div class="form-group subject">
                                            <input type="text" name="subject" class="form-control" placeholder="Subject">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                        <div class="form-group number">
                                            <input type="text" name="phone" class="form-control" placeholder="Number">
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="form-group message">
                                            <textarea class="form-control" name="message" placeholder="Write message"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                                        <div class="send-btn">
                                            <button type="submit" class="btn btn-color btn-md btn-message">Send Message</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-12">
                <div class="sidebar mbl">
                     Search area start -->

                    <!-- Categories start
                    <div class="widget categories">
                        <h5 class="sidebar-title">Categories</h5>
                        <ul>
                            <li><a href="#">Apartments<span>(12)</span></a></li>
                            <li><a href="#">Houses<span>(8)</span></a></li>
                            <li><a href="#">Family Houses<span>(23)</span></a></li>
                            <li><a href="#">Offices<span>(5)</span></a></li>
                            <li><a href="#">Villas<span>(63)</span></a></li>
                            <li><a href="#">Other<span>(7)</span></a></li>
                        </ul>
                    </div>

                     Recent posts start
                    <div class="widget recent-posts">
                        <h5 class="sidebar-title">Recent Properties</h5>
                        <div class="media mb-4">
                            <a class="pr-4" href="properties-details.html">
                                <img src="/img/sub-property/sub-property.jpg" alt="sub-property">
                            </a>
                            <div class="media-body align-self-center">
                                <h5>
                                    <a href="properties-details.html">Beautiful Single Home</a>
                                </h5>
                                <p>February 27, 2018</p>
                                <p> <strong>$245,000</strong></p>
                            </div>
                        </div>
                        <div class="media mb-4">
                            <a class="pr-4" href="properties-details.html">
                                <img src="/img/sub-property/sub-property-2.jpg" alt="sub-property-2">
                            </a>
                            <div class="media-body align-self-center">
                                <h5>
                                    <a href="properties-details.html">Sweet Family Home</a>
                                </h5>
                                <p>February 27, 2018</p>
                                <p> <strong>$245,000</strong></p>
                            </div>
                        </div>
                        <div class="media">
                            <a class="pr-4" href="properties-details.html">
                                <img src="/img/sub-property/sub-property-3.jpg" alt="sub-property-3">
                            </a>
                            <div class="media-body align-self-center">
                                <h5>
                                    <a href="properties-details.html">Real Luxury Villa</a>
                                </h5>
                                <p>February 27, 2018</p>
                                <p> <strong>$245,000</strong></p>
                            </div>
                        </div>
                    </div>

                    Social list start
                    <div class="social-list widget clearfix">
                        <h5 class="sidebar-title">Follow Us</h5>
                        <ul>
                            <li><a href="#" class="facebook-bg"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#" class="twitter-bg"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#" class="google-bg"><i class="fa fa-google-plus"></i></a></li>
                            <li><a href="#" class="rss-bg"><i class="fa fa-rss"></i></a></li>
                            <li><a href="#" class="linkedin-bg"><i class="fa fa-linkedin"></i></a></li>
                        </ul>
                    </div>

                     Helping center start
                    <div class="helping-center widget clearfix">
                        <div class="media">
                            <i class="fa fa-mobile"></i>
                            <div class="media-body  align-self-center">
                                <h5 class="mt-0">Helping Center</h5>
                                <h4><a href="tel:+0477-85x6-552">+XXXX XXXX XXX</a></h4>
                            </div>
                        </div>
                    </div>

                    Financing calculator  start
                    <div class="contact-1 financing-calculator widget">
                        <h5 class="sidebar-title">Mortgage Calculator</h5>
                        <form action="#" method="GET" enctype="multipart/form-data">
                            <div class="form-group">
                                <label class="form-label">Property Price</label>
                                <input type="text" class="form-control" placeholder="$36.400">
                            </div>
                            <div class="form-group">
                                <label class="form-label">Interest Rate (%)</label>
                                <input type="text" class="form-control" placeholder="10%">
                            </div>
                            <div class="form-group">
                                <label class="form-label">Period In Months</label>
                                <input type="text" class="form-control" placeholder="10 Months">
                            </div>
                            <div class="form-group">
                                <label class="form-label">Down PaymenT</label>
                                <input type="text" class="form-control" placeholder="$21,300">
                            </div>
                            <br>
                            <div class="form-group mb-0">
                                <button type="submit" class="btn btn-color btn-md btn-message btn-block">Cauculate</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
Properties details page end -->
@stop

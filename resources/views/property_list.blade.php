@extends('layouts.app')
@section('list')
@foreach($ps as $l)
<li><a class="dropdown-item" href="/property_list/{{$l->id}}">{{$l->property_purpose}}</a></li>
@endforeach
@stop
@section('links')
@foreach($s3 as $s)
<li><a class="dropdown-item" href="/services/{{$s->id}}">{{$s->service}}</a></li>
@endforeach
@stop
@section('content')

<!-- Sub banner start -->
<div class="sub-banner overview-bgi">
    <div class="container">
        <div class="breadcrumb-area">

            <h1>Property</h1>
        </div>
    </div>
</div>
<!-- Sub banner end -->

<!-- Properties details page start -->
<div class="properties-details-page content-area-15">
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
                                <div class="tag button alt featured">Not Available</div>
                                @endif
                              <div class="price-ratings-box">
                                  <h3 class="price">
                                     {{'Ksh.'.$p->price}}
                                  </h3>

                              </div>
                              <img src="{{url('images/'.$p->featured_image)}}" alt="property-7" class="img-fluid">
                          </a>
                          <div class="property-overlay">
                              <a href="/property/{{$p->id}}" class="overlay-link">
                                  <i class="fa fa-link"></i>
                              </a>
                              <!--<a class="overlay-link property-video" title="Test Title">
                                  <i class="fa fa-video-camera"></i>
                              </a>
                            -->
                              <div class="property-magnify-gallery">
                                  <a href="/img/property-7.jpg" class="overlay-link">
                                      <i class="fa fa-expand"></i>
                                  </a>
                                  <a href="/img/property-6.jpg" class="hidden"></a>
                                  <a href="/img/property-3.jpg" class="hidden"></a>
                              </div>
                          </div>
                      </div>
                      <div class="detail">
                          <h1 class="title">
                              <a href="/property/{{$p->id}}">{{$p->property_name}}</a>
                          </h1>
                          <div class="location">
                              <a href="properties-details.html">
                                  <i class="flaticon-facebook-placeholder-for-locate-places-on-maps"></i>{{$p->location->locations}}
                              </a>
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
                              @lse
                              <li>
                                  <i class="flaticon-bath"></i> {{$p->bathrooms}} Bathrooms
                              </li>
                              @endif
                            <!--  <li>
                                  <i class="flaticon-square-layouting-with-black-square-in-east-area"></i> Sq Ft:3400
                              </li>
                                                  -->
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

  </div>
</div>
</div>



@stop

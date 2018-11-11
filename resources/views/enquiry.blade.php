@extends('layouts.app')
@section('list')
@foreach($list as $l)
<li><a class="dropdown-item" href="/property_list/{{$l->id}}">{{$l->property_purpose}}</a></li>
@endforeach
@stop
@section('links')
@foreach($s5 as $sl)
<li><a class="dropdown-item" href="/services/{{$sl->id}}">{{$sl->service}}</a></li>
@endforeach
@stop
@section('content')
<!-- Sub banner start -->
<div class="sub-banner overview-bgi">
    <div class="container">
        <div class="breadcrumb-area">
            <h1>Service Enquiry</h1>
        </div>
    </div>
</div>
<!-- Sub banner end -->

<!-- Properties details page start -->


<div class="about-us content-area-7">
<div class="container">
<div class="row">


<form class="" action="/enquiry" method="post" enctype="multipart/form-data">
  @include('partials.success2')
  @include('partials.errors')
  @csrf
  <div class="row">
    <div class="col-md-12">
      <div class="form-group">
        <label for="">Full name</label>
        <input type="text" class="form-control" name="name" value="">
      </div>
    </div>
    </div>
    <div class="row">
      <div class="col-md-6">
        <div class="form-group">
          <label for="">Email</label>
          <input type="email" class="form-control"  name="email" value="">
        </div>
      </div>
      <div class="col-md-6">
        <div class="form-group">
          <label for="">Mobile no</label>
          <input type="text"class="form-control"  name="mobile" value="">
        </div>
      </div>
    </div>

  <div class="form-group">
    <label for="">Property Name</label>
  <input type="text"class="form-control"  name="property_name" value="">
  </div>

    <div class="col-md-6">
      <div class="form-group">
        <label for="">Property type</label>
        <select class="selectpicker search-fields" name="property_type">
          <option>Property Type</option>
          @foreach($type as $t)
          <option value="{{$t->id}}">{{$t->property_type}}</option>
          @endforeach
        </select>
      </div>
    </div>
    <div class="col-md-6">
      <div class="form-group">
        <label for="">Property purpose</label>
        <select class="selectpicker search-fields" name="property_purpose">
          <option>Property Purpose</option>
          @foreach($list as $l)
          <option value="{{$l->id}}">{{$l->property_purpose}}</option>
          @endforeach
        </select>
      </div>
    </div>


  <div class="row">
    <div class="col-md-6">
  <div class="form-group">
    <label for="">Location</label>
    <input type="text" class="form-control" name="location" value="">
  </div>
  </div>
    <div class="col-md-6">
  <div class="form-group">
    <label for="">Address</label>
    <input type="text" class="form-control" name="address" value="">
  </div>
    </div>
  </div>
  <div class="form-group">
    <label for="">Description</label>
    <textarea name="description" class="form-control" rows="8" cols="8"></textarea>
  </div>
  <div class="form-group">
    <label for="">Upload files</label>
    <input type="file" class="form-control" name="file[]" value="" multiple>
  </div>
  <div class="form-group">
    <label for="">Upload images</label>
    <input type="file" class="form-control" name="image[]" value="" multiple>
    <small>upload if necessary</small>
  </div>
  <div class="form-group">
    <input type="submit" class="btn btn-success"  value="Submit">
  </div>
</form>
</div>

</div>
</div>
<!-- services end -->





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

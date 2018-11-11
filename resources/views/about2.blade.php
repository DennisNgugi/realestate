@extends('layouts.app')
@section('list')
@foreach($list as $l)
<li><a class="dropdown-item" href="/property_list/{{$l->id}}">{{$l->property_purpose}}</a></li>
@endforeach
@stop
@section('links')
@foreach($s1 as $sl)
<li><a class="dropdown-item" href="/services/{{$sl->id}}">{{$sl->service}}</a></li>
@endforeach
@stop
@section('content')

<!-- Sub banner start -->
<div class="sub-banner overview-bgi">
    <div class="container">
        <div class="breadcrumb-area">
            <h1>About Us</h1>
        </div>
    </div>
</div>
<!-- Sub banner end -->

<!-- Properties details page start -->

    <div class="container">
        <div class="row">



                            <div class="about-us content-area-7">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <div class="properties-service-v">
                                             <img id="logo2" src="/img/banner-4.png" alt="">
                                             <style>
                                               #logo2 {

                                                width:50%;
                                                height:50%;
                                               }
                                             </style>
                                            </div>
                                        </div>
                                        <div class="col-lg-8 align-self-center">
                                            <div class="about-text">
                                              <div class="main-title">
                                                  <h1>Welcome to Realmast</h1>
                                              </div>
                                                <p>Realmast was established to offer quality professional services in the Real Estate sector. Our team
                                                  of consultants handles all aspects of real estate and are highly qualified to deal in rental, sale,
                                                 management, valuation and property consultancy.
                                                 We handle the needs of our client’s diligently and achieve success by offering the best service.
                                                 The commitment to excel ensures that every consultation is greatly upheld and reviewed with a
                                                 view of giving the best and improving on the services already provided. We not only inspire and
                                                 warrant confidence but also maintain professional standards and ethics. Our performance gauge is
                                                 increasing productivity, skill, efficiency and better service provision.</p>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                              <!--
                              <h2 class="heading" >SERVICES OFFERED</h2>
                              <p>Realmast is a real estate company that is adequately equipped to handle all under listed enquires: </p>
                              <p ><b><u>Property Valuations</u></b></p>
                              <p>Realmast inspects and values real estate for the various purposes such as open market value for
                              mortgage, insurance, rental assessments, sale, auction and forced sale. We have adequate
                              indemnity cover and we abide by the laid down code of conduct and professional ethics. Our
                              valuations have clear illustrations and reports depict a visual image of the property.</p>
                              <p ><b><u>Property Sales</u></b></p>
                              <p>The property sales’ team at Realmast is trained in achieving the best for our clients in the vibrant
                              or depressed real estate markets. We deal in sale of residential, commercial, industrial, agricultural
                              and special properties such as schools, entertainment facilities. By broadening the market base,
                              Realmast seeks to be in touch with as many buyers and sellers as possible.</p>
                              <p ><b><u>Property Letting</u></b></p>
                              <p>Realmast transcends the broad spectrum of the real estate market. Our letting department handles
                              residential, commercial (offices and shops) and industrial (go-downs, factories and warehouses)
                              property letting effectively. We give our properties diverse property exposure through advertising
                              in the Internet, print media, professional periodicals, and shopping malls among others.
                              Our property portfolio is diverse and you can be sure of matching your requirements with an
                              available choice. We go the extra mile to meet your requirements at no extra costs. </p>
                              <p><b><u>Property Management</u></b></p>
                              <p>Realmast handles residential, commercial and industrial property management issues offering
                            property management services to our clients at the recommended rates. Our strengths in
                            management are efficiency, effectiveness, periodic appraisals and personal touch. The vast
                            experience and continuous exposure over time enables us to advise our clients on the best solutions
                            to the problems encountered in the management of property and our management department
                            ensures that all clients are served appropriately.
                            </p>
                            <p><b><u>Property Consultancy</u></b></p>
                            <p>We at Realmast have in depth knowledge and competent understanding of the real estate sector.
                            We offer consultancy in the following among others:<br>
                            i) Investment appraisal and preparation of feasibility studies <br>
                            ii) Project management <br>
                            iii) Advice to building design team on matters related to marketing of premises and expected
                            returns. <br>
                            iv) Resolution of real estate disputes <br>
                            v) Negotiation of mortgage finance on behalf of clients <br>
                            vi) Negotiation of business ventures on behalf of clients <br>
                            Our consultants enable you to save on costs and have a broader view of your investment decisions
                            and their implications hence advising you accordingly.
                            Realmast’s success is based on our <u>tenets of operations</u> namely:
                            </p>
                            <p><b><u>Efficiency</u></b></p>
                            <p>We guarantee a high degree of efficiency in the disbursement of our services and deliver the
desired results. This enables you to save time, reduce costs and stress as a team of efficient
professionals is at your disposal.
                          </p>
                          <p><b><u>Competitiveness</u></b></p>
                          <p>An ardent professional needs to be competitive in the markets so as to be a benchmark in the
industry. We at Realmast promise you competitive rates, most recent products and services in the
market.
                        </p>
                        <p><b><u>Flexibility</u></b></p>
                        <p>While maintaining professional standards, Realmast affords clients flexibility to meet their varying
needs at all times. We go the extra step to meet our client’s needs and suit them aptly in their
abilities.

                      </p>
                      <p><b><u>Personalized service</u></b></p>
                      <p>We greatly recognise the need to serve clients with the personally touch. Though we target a large
spectrum of clientele, our personal touch demystifies real estate dealings and puts Realmast ahead
in the industry.
                    </p>
                    <p><b><u>Market edge</u></b></p>
                    <p>Our services and products are a benchmark and an up-date in the industry. To maintain our market
edge, we launched our website, www.realmast.com which aims at bringing our services closer
and afford clients the convenience of transacting with us. A visit to our site dissects Realmast.
                  </p>
                  <p><b><u>Honesty</u></b></p>
                  <p>Real estate is a capital oriented investment that requires prudent and sincere management for
sustainability. We are guided by the principle of honesty and frankness and your first interaction
with us confirms this.
Realmast is a team of real estate consultants each specialising in a specific discipline of the real
estate sector. This enables us to pool our services and afford the client a one-stop shop for all real
estate matters.

                </p>
                <p><b><u>Proffessional standards</u></b></p>
                <p>We at Realmast subscribe and are registered members of professional bodies namely the Institute
of Surveyors of Kenya (I.S.K.) and Estate Agents Registration Board (E.A.R.B.) that regulate the
code of ethics and professional standards.
              </p>

-->
              <!-- services start -->
              <div class="services content-area-17">
                  <div class="container">
                      <div class="main-title">
                          <h1>Our Services</h1>
                      </div>
                      <div class="row">
                          <div class="col-lg-12 col-md-12 col-sm-12 wow fadeInUp delay-04s">
                              <div class="media services-info">
                                <!-- <i class="flaticon-hotel-building"></i>-->
                                  <div class="media-body">
                                      <h5 class="text-center"> <b>Property Valuation</b></h5>
                                      <p class="text-center">Realmast inspects and values real estate for the various purposes such as open market value for
                                      mortgage, insurance, rental assessments, sale, auction and forced sale. We have adequate
                                      indemnity cover and we abide by the laid down code of conduct and professional ethics. Our
                                      valuations have clear illustrations and reports depict a visual image of the property.</p>
                                  </div>
                              </div>
                          </div>
                        </div>
                      <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 wow fadeInUp delay-04s">
                            <div class="media services-info">
                               <!--<i class="flaticon-house"></i>-->
                                <div class="media-body">
                                    <h5 class="text-center"><b>Property Sales</b></h5>
                                    <p class="text-center">The property sales’ team at Realmast is trained in achieving the best for our clients in the vibrant
                                    or depressed real estate markets. We deal in sale of residential, commercial, industrial, agricultural
                                    and special properties such as schools, entertainment facilities. By broadening the market base,
                                    Realmast seeks to be in touch with as many buyers and sellers as possible.</p>
                                </div>
                            </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 wow fadeInUp delay-04s">
                            <div class="media services-info">
                              <!--  <i class="flaticon-padlock"></i> -->
                                <div class="media-body">
                                    <h5 class="text-center"><b>Property Letting</b></h5>
                                    <p class="text-center">Realmast transcends the broad spectrum of the real estate market. Our letting department handles
                                    residential, commercial (offices and shops) and industrial (go-downs, factories and warehouses)
                                    property letting effectively. We give our properties diverse property exposure through advertising
                                    in the Internet, print media, professional periodicals, and shopping malls among others.
                                    Our property portfolio is diverse and you can be sure of matching your requirements with an
                                    available choice. We go the extra mile to meet your requirements at no extra costs. </p>
                                </div>
                            </div>
                        </div>
                      </div>

                        <div class="row">
                          <div class="col-lg-12 col-md-12 col-sm-12 wow fadeInUp delay-04s">
                              <div class="media services-info">
                                  <!--<i class="flaticon-call-center-agent"></i>-->
                                  <div class="media-body">
                                      <h5 class="text-center"><b>Property Management</b></h5>
                                      <p class="text-center">Realmast handles residential, commercial and industrial property management issues offering
                                    property management services to our clients at the recommended rates. Our strengths in
                                    management are efficiency, effectiveness, periodic appraisals and personal touch. The vast
                                    experience and continuous exposure over time enables us to advise our clients on the best solutions
                                    to the problems encountered in the management of property and our management department
                                    ensures that all clients are served appropriately.
                                    </p>
                                  </div>
                              </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-lg-12 col-md-12 col-sm-12 wow fadeInUp delay-04s">
                              <div class="media services-info">
                                <!--  <i class="flaticon-agreement"></i>-->
                                  <div class="media-body">
                                      <h5 class="text-center"><b>Property Consultancy</b></h5>
                                      <p>We at Realmast have in depth knowledge and competent understanding of the real estate sector.
                                      We offer consultancy in the following among others:<br></p>
                                      <p>
                                      i) Investment appraisal and preparation of feasibility studies <br>
                                      ii) Project management <br>
                                      iii) Advice to building design team on matters related to marketing of premises and expected
                                      returns. <br>
                                      iv) Resolution of real estate disputes <br>
                                      v) Negotiation of mortgage finance on behalf of clients <br>
                                      vi) Negotiation of business ventures on behalf of clients <br>
                                      Our consultants enable you to save on costs and have a broader view of your investment decisions
                                      and their implications hence advising you accordingly.

                                      </p>
                                  </div>
                              </div>
                          </div>
                        </div>
                        <div class="main-title">
                            <h5>  Realmast’s success is based on our <u>tenets of operations</u> namely:</h5>
                        </div>
                        <div class="row">
                          <div class="col-lg-4 col-md-6 col-sm-6 wow fadeInUp delay-04s">
                              <div class="media services-info">
                                <!--  <i class="flaticon-agreement"></i>-->
                                  <div class="media-body">
                                      <h5 class="text-center"><b>Efficiency</b></h5>
                                      <p class="text-center">We guarantee a high degree of efficiency in the disbursement of our services and deliver the
          desired results. This enables you to save time, reduce costs and stress as a team of efficient
          professionals is at your disposal.
                                    </p>
                                  </div>
                              </div>
                          </div>
                          <div class="col-lg-4 col-md-6 col-sm-6 wow fadeInUp delay-04s">
                              <div class="media services-info">
                                <!--  <i class="flaticon-agreement"></i>-->
                                  <div class="media-body">
                                      <h5 class="text-center"><b>Competitiveness</b></h5>
                                      <p class="text-center">An ardent professional needs to be competitive in the markets so as to be a benchmark in the
                                      industry. We at Realmast promise you competitive rates, most recent products and services in the
                                      market.
                                      </p>
                                  </div>
                              </div>
                          </div>
                          <div class="col-lg-4 col-md-6 col-sm-6 wow fadeInUp delay-04s">
                              <div class="media services-info">
                                <!--  <i class="flaticon-agreement"></i>-->
                                  <div class="media-body">
                                      <h5 class="text-center"><b>Flexibility</b></h5>
                                      <p class="text-center">While maintaining professional standards, Realmast affords clients flexibility to meet their varying
                                      needs at all times. We go the extra step to meet our client’s needs and suit them aptly in their
                                      abilities.

                                      </p>
                                  </div>
                              </div>
                          </div>
                          <div class="col-lg-4 col-md-6 col-sm-6 wow fadeInUp delay-04s">
                              <div class="media services-info">
                                <!--  <i class="flaticon-agreement"></i>-->
                                  <div class="media-body">
                                      <h5 class="text-center"><b>Personalized Service</b></h5>
                                      <p class="text-center">We greatly recognise the need to serve clients with the personally touch. Though we target a large
                                      spectrum of clientele, our personal touch demystifies real estate dealings and puts Realmast ahead
                                      in the industry.
                                      </p>
                                  </div>
                              </div>
                          </div>
                          <div class="col-lg-4 col-md-6 col-sm-6 wow fadeInUp delay-04s">
                              <div class="media services-info">
                                <!--  <i class="flaticon-agreement"></i>-->
                                  <div class="media-body">
                                      <h5 class="text-center"><b>Proffessional Standards</b></h5>
                                      <p class="text-center">We at Realmast subscribe and are registered members of professional bodies namely the Institute
                                      of Surveyors of Kenya (I.S.K.) and Estate Agents Registration Board (E.A.R.B.) that regulate the
                                      code of ethics and professional standards.
                                      </p>
                                  </div>
                              </div>
                          </div>
                          <div class="col-lg-4 col-md-6 col-sm-6 wow fadeInUp delay-04s">
                              <div class="media services-info">
                                <!--  <i class="flaticon-agreement"></i>-->
                                  <div class="media-body">
                                      <h5 class="text-center"><b>Market Edge</b></h5>
                                      <p class="text-center">Our services and products are a benchmark and an up-date in the industry. To maintain our market
                                      edge, we launched our website, www.realmast.com which aims at bringing our services closer
                                      and afford clients the convenience of transacting with us. A visit to our site dissects Realmast.
                                      </p>
                                  </div>
                              </div>
                          </div>

                          <div class="col-lg-4 col-md-6 col-sm-6 col-center-block  wow fadeInUp delay-04s">
                              <div class="media services-info">
                                <!--  <i class="flaticon-agreement"></i>-->
                                  <div class="media-body">
                                      <h5 class="text-center"><b>Honesty</b></h5>
                                      <p class="text-center">Real estate is a capital oriented investment that requires prudent and sincere management for
                                      sustainability. We are guided by the principle of honesty and frankness and your first interaction
                                      with us confirms this.
                                      Realmast is a team of real estate consultants each specialising in a specific discipline of the real
                                      estate sector. This enables us to pool our services and afford the client a one-stop shop for all real
                                      estate matters.

                                      </p>
                                  </div>
                              </div>
                          </div>


                        </div>


                      </div>
                  </div>
              </div>
              <!-- services end -->


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

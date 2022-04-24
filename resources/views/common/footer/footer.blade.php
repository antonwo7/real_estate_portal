<!-- Footer start -->
<footer class="footer">
    <div class="container footer-inner">
        <div class="row">
            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                <div class="footer-item">
                    <h4>Contact Us</h4>
                    <ul class="contact-info">
                        <li>
                            <i class="flaticon-facebook-placeholder-for-locate-places-on-maps"></i>{{ $settings['address'] }}
                        </li>
                        <li>
                            <i class="fa fa-envelope"></i><a href="mailto:sales@hotelempire.com">{{ $settings['email'] }}</a>
                        </li>
                        <li>
                            <i class="fa fa-phone"></i><a href="tel:{{ $settings['phone'] }}">{{ $settings['phone'] }}</a>
                        </li>
                        <li>
                            <i class="fa fa-fax"></i>{{ $settings['fax'] }}
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-xl-2 col-lg-2 col-md-6 col-sm-6">
                <div class="footer-item">
                    @if(!empty($menu))
                        <h4>Useful Links</h4>
                        <ul class="links">
                            @foreach($menu as $item)
                                <li>
                                    <a href="{{ url($item->slug) }}"><i class="fa fa-angle-right"></i>{{ $item->title }}</a>
                                </li>
                            @endforeach
                        </ul>
                    @endif
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                <div class="footer-item recent-posts">
                    @if(!empty($recent_properties))
                        <h4>Recent Properties</h4>
                        @foreach($recent_properties as $property)
                            <div class="media mb-4">
                                <a href="properties-details.html">
                                    <img src="{{ asset('img/property') . '/' . $property->images[0] }}" alt="{{ $property->title }}">
                                </a>
                                <div class="media-body align-self-center">
                                    <h5>
                                        <a href="properties-details.html">{{ $property->title }}</a>
                                    </h5>
                                    <p>{{ $property->created_at }} | ${{ $property->price }}</p>
                                </div>
                            </div>
                        @endforeach
                    @endif
                </div>
            </div>
            <div class="col-xl-4 col-lg-3 col-md-6 col-sm-6">
                <div class="footer-item clearfix">
                    <div class="submitNewsletter">
                        <h4>Subscribe</h4>
                        <div class="Subscribe-box">
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since,</p>
                            <form action="{{ url('subscribe') }}" method="post">
                                @csrf
                                <input type="text" class="form-contact" name="email" placeholder="Enter Address">
                                <button type="submit" name="submitNewsletter" class="btn btn-color">
                                    <i class="fa fa-paper-plane"></i>
                                </button>
                            </form>
                            @switch(session()->get('subscription'))
                                @case('exist')
                                <div class="alert alert-warning mt-3" role="alert">This email is already subscribed!</div>
                                @break
                                @case('error')
                                <div class="alert alert-danger mt-3" role="alert">Error while subscribing!</div>
                                @break
                                @case('success')
                                <div class="alert alert-success mt-3" role="alert">This email was subscribed!</div>
                            @endswitch
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="sub-footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-12">
                    <p class="copy">© 2018 <a href="#">Theme Vessel.</a> Trademarks and brands are the property of their respective owners.</p>
                </div>
                <div class="col-lg-4 col-md-12">
                    @if($settings['nets'])
                        <ul class="social-list clearfix">
                            @foreach($settings['nets'] as $net)
                                <li>
                                    <a href="{{ $net['url'] }}" class="{{ $net['slug'] }}-bg">
                                        <i class="fa {{ $net['icon'] }}"></i>
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                    @endif
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- Footer end -->

<!-- Full Page Search -->
<div id="full-page-search">
    <button type="button" class="close">×</button>
    <form action="#" class="search">
        <input type="search" value="" placeholder="type keyword(s) here"/>
        <button type="button" class="btn btn-sm btn-color">Search</button>
    </form>
</div>

<!-- Property Video Modal -->
<div class="modal property-modal fade" id="propertyModal" tabindex="-1" role="dialog" aria-labelledby="propertyModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="propertyModalLabel">
                    Find Your Dream Properties
                </h5>
                <p>
                    <i class="flaticon-facebook-placeholder-for-locate-places-on-maps"></i> 123 Kathal St. Tampa City,
                </p>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-lg-6 modal-left">
                        <div class="modal-left-content">
                            <div id="modalCarousel" class="carousel slide" data-ride="carousel">
                                <div class="carousel-inner" role="listbox">
                                    <div class="carousel-item active">
                                        <iframe class="modalIframe" src="https://www.youtube.com/embed/xywe1MxGxKw" allowfullscreen></iframe>
                                    </div>
                                    <div class="carousel-item">
                                        <img src="assets/img/img-8.png" alt="Test ALT">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="assets/img/img-9.png" alt="Test ALT">
                                    </div>
                                </div>
                                <a class="control control-prev" href="#modalCarousel" role="button" data-slide="prev">
                                    <i class="fa fa-angle-left"></i>
                                </a>
                                <a class="control control-next" href="#modalCarousel" role="button" data-slide="next">
                                    <i class="fa fa-angle-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 modal-right">
                        <div class="modal-right-content">
                            <section>
                                <h3>Features</h3>
                                <ul class="bullets">
                                    <li><i class="flaticon-bed"></i> Double Bed</li>
                                    <li><i class="flaticon-swimmer"></i> Swimming Pool</li>
                                    <li><i class="flaticon-bath"></i> 2 Bathroom</li>
                                    <li><i class="flaticon-car-repair"></i> Garage</li>
                                    <li><i class="flaticon-parking"></i> Parking</li>
                                    <li><i class="flaticon-theatre-masks"></i> Home Theater</li>
                                    <li><i class="flaticon-old-typical-phone"></i> Telephone</li>
                                    <li><i class="flaticon-green-park-city-space"></i> Private space</li>
                                </ul>
                            </section>
                            <section>
                                <h3>Overview</h3>
                                <ul class="bullets bullets2">
                                    <li> Area</li>
                                    <li>Condition</li>
                                    <li>2 Year</li>
                                    <li>Price</li>
                                    <li>2500 Sq Ft:3400</li>
                                    <li>New</li>
                                    <li>2018</li>
                                    <li>$178,000</li>
                                </ul>
                            </section>
                            <div class="ratings-2">
                                <span class="ratings-box">4.5/5</span>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star-o"></i>
                                <span>( 7 Reviews )</span>
                            </div>
                            <a href="properties-details.html" class="btn btn-show btn-theme">Show Detail</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

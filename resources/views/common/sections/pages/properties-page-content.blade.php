<!-- properties list rightside start -->
<div class="properties-list-rightside content-area-2">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-12">
                <div class="sidebar mrb">
                    <!-- Search area start -->
                    @include('common.parts.sidebar.filter')
                    <!-- features brand start -->
                    <div class="widget features-brand">
                        <div class="search-area-inner">
                            <div class="search-contents ">
                                <form method="GET">
                                    <h5 class="sidebar-title">Features</h5>
                                    <div class="form-group mb-0">
                                        <div class="form-check checkbox-theme">
                                            <input class="form-check-input" type="checkbox" value="" id="audi">
                                            <label class="form-check-label" for="audi">
                                                Air Condition
                                            </label>
                                        </div>
                                        <div class="form-check checkbox-theme">
                                            <input class="form-check-input" type="checkbox" value="" id="honda">
                                            <label class="form-check-label" for="honda">
                                                Free Parking
                                            </label>
                                        </div>
                                        <div class="form-check checkbox-theme">
                                            <input class="form-check-input" type="checkbox" value="" id="volkswagen">
                                            <label class="form-check-label" for="volkswagen">
                                                Swimming Pool
                                            </label>
                                        </div>
                                        <div class="form-check checkbox-theme">
                                            <input class="form-check-input" type="checkbox" value="" id="lamborghini">
                                            <label class="form-check-label" for="lamborghini">
                                                Laundry Room
                                            </label>
                                        </div>
                                        <div class="form-check checkbox-theme">
                                            <input class="form-check-input" type="checkbox" value="" id="bmw">
                                            <label class="form-check-label" for="bmw">
                                                Central Heating
                                            </label>
                                        </div>
                                        <div class="form-check checkbox-theme mb-0">
                                            <input class="form-check-input" type="checkbox" value="" id="toyota">
                                            <label class="form-check-label" for="toyota">
                                                Window Covering
                                            </label>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- Categories start -->
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
                    <!-- Recent posts start -->
                    <div class="widget recent-posts">
                        <h5 class="sidebar-title">Recent Properties</h5>
                        <div class="media mb-4">
                            <a href="properties-details.html">
                                <img src="assets/img/sub-property/sub-property.png" alt="sub-property">
                            </a>
                            <div class="media-body align-self-center">
                                <h5>
                                    <a href="properties-details.html">Beautiful Single Home</a>
                                </h5>
                                <p>Feb 27, 2020 | $1045,000</p>
                            </div>
                        </div>
                        <div class="media mb-4">
                            <a href="properties-details.html">
                                <img src="assets/img/sub-property/sub-property-2.png" alt="sub-property-2">
                            </a>
                            <div class="media-body align-self-center">
                                <h5>
                                    <a href="properties-details.html">Sweet Family Home</a>
                                </h5>
                                <p>Mar 14, 2020 | $944,000</p>
                            </div>
                        </div>
                        <div class="media">
                            <a href="properties-details.html">
                                <img src="assets/img/sub-property/sub-property-3.png" alt="sub-property-3">
                            </a>
                            <div class="media-body align-self-center">
                                <h5>
                                    <a href="properties-details.html">Real Luxury Villa</a>
                                </h5>
                                <p>Apr 14, 2020 | $1420,000</p>
                            </div>
                        </div>
                    </div>
                    <!-- Recent comments start -->
                    <div class="widget-3 recent-comments">
                        <h5 class="sidebar-title">Recent comments</h5>
                        <div class="media mb-4">
                            <a href="#">
                                <img src="assets/img/avatar/avatar.png" alt="recent-comments">
                            </a>
                            <div class="media-body">
                                <h5>Xa Miller</h5>
                                <p>Lorem Ipsum is simply dummy text of the printing and.</p>
                            </div>
                        </div>
                        <div class="media">
                            <a href="#">
                                <img src="assets/img/avatar/avatar-2.png" alt="recent-comments">
                            </a>
                            <div class="media-body">
                                <h5>Antony John</h5>
                                <p>Lorem Ipsum is simply dummy text of the printing and.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-8 col-md-12">
                <div class="option-bar">
                    <div class="row clearfix">
                        <div class="col-xl-4 col-lg-5 col-md-5 col-sm-5 col-3">
                            <h4>
                                <span class="heading-icon">
                                    <i class="fa fa-caret-right icon-design"></i>
                                    <i class="fa fa-th-list"></i>
                                </span>
                                <span class="heading">Properties List</span>
                            </h4>
                        </div>
                        <div class="col-xl-8 col-lg-7 col-md-7 col-sm-7 col-9">
                            <div class="sorting-options clearfix">
                                <a href="properties-list-leftside.html" class="change-view-btn active-view-btn"><i class="fa fa-th-list"></i></a>
                                <a href="properties-grid-leftside.html" class="change-view-btn"><i class="fa fa-th-large"></i></a>
                            </div>
                            <div class="search-area">
                                <select class="selectpicker search-fields" name="location">
                                    <option>High to Low</option>
                                    <option>Low to High</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="subtitle">
                    20 Result Found
                </div>
                <div class="property-box-5">
                    <div class="row">
                        <div class="col-lg-5 col-md-5 col-pad">
                            <div class="property-thumbnail">
                                <a href="properties-details.html" class="property-img">
                                    <div class="listing-badges">
                                        <span class="featured">Featured</span>
                                    </div>
                                    <div class="tag-for">For Sale</div>
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
                                    <img src="assets/img/property/img-1.png" alt="property-box-5" class="img-fluid">
                                </a>
                                <div class="property-overlay">
                                    <a href="properties-details.html" class="overlay-link">
                                        <i class="fa fa-link"></i>
                                    </a>
                                    <a class="overlay-link property-video" title="Test Title">
                                        <i class="fa fa-video-camera"></i>
                                    </a>
                                    <div class="property-magnify-gallery">
                                        <a href="assets/img/property/img-1.png" class="overlay-link">
                                            <i class="fa fa-expand"></i>
                                        </a>
                                        <a href="assets/img/property/img-2.png" class="hidden"></a>
                                        <a href="assets/img/property/img-3.png" class="hidden"></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-7 col-md-7 align-self-center col-pad">
                            <div class="detail">
                                <!-- title -->
                                <h1 class="title">
                                    <a href="properties-details.html">Modern Family Home</a>
                                </h1>
                                <!-- Location -->
                                <div class="location">
                                    <a href="properties-details.html">
                                        <i class="fa fa-map-marker"></i>123 Kathal St. Tampa City,
                                    </a>
                                </div>
                                <!-- Paragraph -->
                                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy<span class="d-none-1200">nibh euismod…</span></p>
                                <!--  Facilities list -->
                                <ul class="facilities-list clearfix">
                                    <li>
                                        <i class="flaticon-bed"></i> 3 Beds
                                    </li>
                                    <li>
                                        <i class="flaticon-bath"></i> 2 Baths
                                    </li>
                                    <li>
                                        <i class="flaticon-square-layouting-with-black-square-in-east-area"></i> Sq Ft:3400
                                    </li>
                                    <li>
                                        <i class="flaticon-car-repair"></i> 1 Garage
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="property-box-5">
                    <div class="row">
                        <div class="col-lg-5 col-md-5 col-pad">
                            <div class="property-thumbnail">
                                <a href="properties-details.html" class="property-img">
                                    <div class="listing-badges">
                                        <span class="featured">Featured</span>
                                    </div>
                                    <div class="tag-for">For Rent</div>
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
                                    <img src="assets/img/property/img-2.png" alt="property-box-5" class="img-fluid">
                                </a>
                                <div class="property-overlay">
                                    <a href="properties-details.html" class="overlay-link">
                                        <i class="fa fa-link"></i>
                                    </a>
                                    <a class="overlay-link property-video" title="Test Title">
                                        <i class="fa fa-video-camera"></i>
                                    </a>
                                    <div class="property-magnify-gallery">
                                        <a href="assets/img/property/img-2.png" class="overlay-link">
                                            <i class="fa fa-expand"></i>
                                        </a>
                                        <a href="assets/img/property/img-3.png" class="hidden"></a>
                                        <a href="assets/img/property/img-4.png" class="hidden"></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-7 col-md-7 align-self-center col-pad">
                            <div class="detail">
                                <!-- title -->
                                <h1 class="title">
                                    <a href="properties-details.html">Relaxing Apartment</a>
                                </h1>
                                <!-- Location -->
                                <div class="location">
                                    <a href="properties-details.html">
                                        <i class="fa fa-map-marker"></i>123 Kathal St. Tampa City,
                                    </a>
                                </div>
                                <!-- Paragraph -->
                                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy<span class="d-none-1200">nibh euismod…</span></p>
                                <!--  Facilities list -->
                                <ul class="facilities-list clearfix">
                                    <li>
                                        <i class="flaticon-bed"></i> 3 Beds
                                    </li>
                                    <li>
                                        <i class="flaticon-bath"></i> 2 Baths
                                    </li>
                                    <li>
                                        <i class="flaticon-square-layouting-with-black-square-in-east-area"></i> Sq Ft:3400
                                    </li>
                                    <li>
                                        <i class="flaticon-car-repair"></i> 1 Garage
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="property-box-5">
                    <div class="row">
                        <div class="col-lg-5 col-md-5 col-pad">
                            <div class="property-thumbnail">
                                <a href="properties-details.html" class="property-img">
                                    <div class="listing-badges">
                                        <span class="featured">Featured</span>
                                    </div>
                                    <div class="tag-for">For Sale</div>
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
                                    <img src="assets/img/property/img-3.png" alt="property-box-5" class="img-fluid">
                                </a>
                                <div class="property-overlay">
                                    <a href="properties-details.html" class="overlay-link">
                                        <i class="fa fa-link"></i>
                                    </a>
                                    <a class="overlay-link property-video" title="Test Title">
                                        <i class="fa fa-video-camera"></i>
                                    </a>
                                    <div class="property-magnify-gallery">
                                        <a href="assets/img/property/img-3.png" class="overlay-link">
                                            <i class="fa fa-expand"></i>
                                        </a>
                                        <a href="assets/img/property/img-4.png" class="hidden"></a>
                                        <a href="assets/img/property/img-5.png" class="hidden"></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-7 col-md-7 align-self-center col-pad">
                            <div class="detail">
                                <!-- title -->
                                <h1 class="title">
                                    <a href="properties-details.html">Beautiful Single Home</a>
                                </h1>
                                <!-- Location -->
                                <div class="location">
                                    <a href="properties-details.html">
                                        <i class="fa fa-map-marker"></i>123 Kathal St. Tampa City,
                                    </a>
                                </div>
                                <!-- Paragraph -->
                                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy<span class="d-none-1200">nibh euismod…</span></p>
                                <!--  Facilities list -->
                                <ul class="facilities-list clearfix">
                                    <li>
                                        <i class="flaticon-bed"></i> 3 Beds
                                    </li>
                                    <li>
                                        <i class="flaticon-bath"></i> 2 Baths
                                    </li>
                                    <li>
                                        <i class="flaticon-square-layouting-with-black-square-in-east-area"></i> Sq Ft:3400
                                    </li>
                                    <li>
                                        <i class="flaticon-car-repair"></i> 1 Garage
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="property-box-5">
                    <div class="row">
                        <div class="col-lg-5 col-md-5 col-pad">
                            <div class="property-thumbnail">
                                <a href="properties-details.html" class="property-img">
                                    <div class="listing-badges">
                                        <span class="featured">Featured</span>
                                    </div>
                                    <div class="tag-for">For Rent</div>
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
                                    <img src="assets/img/property/img-4.png" alt="property-box-5" class="img-fluid">
                                </a>
                                <div class="property-overlay">
                                    <a href="properties-details.html" class="overlay-link">
                                        <i class="fa fa-link"></i>
                                    </a>
                                    <a class="overlay-link property-video" title="Test Title">
                                        <i class="fa fa-video-camera"></i>
                                    </a>
                                    <div class="property-magnify-gallery">
                                        <a href="assets/img/property/img-4.png" class="overlay-link">
                                            <i class="fa fa-expand"></i>
                                        </a>
                                        <a href="assets/img/property/img-5.png" class="hidden"></a>
                                        <a href="assets/img/property/img-6.png" class="hidden"></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-7 col-md-7 align-self-center col-pad">
                            <div class="detail">
                                <!-- title -->
                                <h1 class="title">
                                    <a href="properties-details.html">Real Luxury Villa</a>
                                </h1>
                                <!-- Location -->
                                <div class="location">
                                    <a href="properties-details.html">
                                        <i class="fa fa-map-marker"></i>123 Kathal St. Tampa City,
                                    </a>
                                </div>
                                <!-- Paragraph -->
                                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy<span class="d-none-1200">nibh euismod…</span></p>
                                <!--  Facilities list -->
                                <ul class="facilities-list clearfix">
                                    <li>
                                        <i class="flaticon-bed"></i> 3 Beds
                                    </li>
                                    <li>
                                        <i class="flaticon-bath"></i> 2 Baths
                                    </li>
                                    <li>
                                        <i class="flaticon-square-layouting-with-black-square-in-east-area"></i> Sq Ft:3400
                                    </li>
                                    <li>
                                        <i class="flaticon-car-repair"></i> 1 Garage
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="property-box-5">
                    <div class="row">
                        <div class="col-lg-5 col-md-5 col-pad">
                            <div class="property-thumbnail">
                                <a href="properties-details.html" class="property-img">
                                    <div class="listing-badges">
                                        <span class="featured">Featured</span>
                                    </div>
                                    <div class="tag-for">For Rent</div>
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
                                    <img src="assets/img/property/img-5.png" alt="property-box-5" class="img-fluid">
                                </a>
                                <div class="property-overlay">
                                    <a href="properties-details.html" class="overlay-link">
                                        <i class="fa fa-link"></i>
                                    </a>
                                    <a class="overlay-link property-video" title="Test Title">
                                        <i class="fa fa-video-camera"></i>
                                    </a>
                                    <div class="property-magnify-gallery">
                                        <a href="assets/img/property/img-5.png" class="overlay-link">
                                            <i class="fa fa-expand"></i>
                                        </a>
                                        <a href="assets/img/property/img-6.png" class="hidden"></a>
                                        <a href="assets/img/property/img-1.png" class="hidden"></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-7 col-md-7 align-self-center col-pad">
                            <div class="detail">
                                <!-- title -->
                                <h1 class="title">
                                    <a href="properties-details.html">Masons Villas</a>
                                </h1>
                                <!-- Location -->
                                <div class="location">
                                    <a href="properties-details.html">
                                        <i class="fa fa-map-marker"></i>123 Kathal St. Tampa City,
                                    </a>
                                </div>
                                <!-- Paragraph -->
                                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy<span class="d-none-1200">nibh euismod…</span></p>
                                <!--  Facilities list -->
                                <ul class="facilities-list clearfix">
                                    <li>
                                        <i class="flaticon-bed"></i> 3 Beds
                                    </li>
                                    <li>
                                        <i class="flaticon-bath"></i> 2 Baths
                                    </li>
                                    <li>
                                        <i class="flaticon-square-layouting-with-black-square-in-east-area"></i> Sq Ft:3400
                                    </li>
                                    <li>
                                        <i class="flaticon-car-repair"></i> 1 Garage
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="property-box-5">
                    <div class="row">
                        <div class="col-lg-5 col-md-5 col-pad">
                            <div class="property-thumbnail">
                                <a href="properties-details.html" class="property-img">
                                    <div class="listing-badges">
                                        <span class="featured">Featured</span>
                                    </div>
                                    <div class="tag-for">For Rent</div>
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
                                    <img src="assets/img/property/img-6.png" alt="property-box-5" class="img-fluid">
                                </a>
                                <div class="property-overlay">
                                    <a href="properties-details.html" class="overlay-link">
                                        <i class="fa fa-link"></i>
                                    </a>
                                    <a class="overlay-link property-video" title="Test Title">
                                        <i class="fa fa-video-camera"></i>
                                    </a>
                                    <div class="property-magnify-gallery">
                                        <a href="assets/img/property/img-6.png" class="overlay-link">
                                            <i class="fa fa-expand"></i>
                                        </a>
                                        <a href="assets/img/property/img-5.png" class="hidden"></a>
                                        <a href="assets/img/property/img-4.png" class="hidden"></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-7 col-md-7 align-self-center col-pad">
                            <div class="detail">
                                <!-- title -->
                                <h1 class="title">
                                    <a href="properties-details.html">Sweet Family Home</a>
                                </h1>
                                <!-- Location -->
                                <div class="location">
                                    <a href="properties-details.html">
                                        <i class="fa fa-map-marker"></i>123 Kathal St. Tampa City,
                                    </a>
                                </div>
                                <!-- Paragraph -->
                                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy<span class="d-none-1200">nibh euismod…</span></p>
                                <!--  Facilities list -->
                                <ul class="facilities-list clearfix">
                                    <li>
                                        <i class="flaticon-bed"></i> 3 Beds
                                    </li>
                                    <li>
                                        <i class="flaticon-bath"></i> 2 Baths
                                    </li>
                                    <li>
                                        <i class="flaticon-square-layouting-with-black-square-in-east-area"></i> Sq Ft:3400
                                    </li>
                                    <li>
                                        <i class="flaticon-car-repair"></i> 1 Garage
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="property-box-5">
                    <div class="row">
                        <div class="col-lg-5 col-md-5 col-pad">
                            <div class="property-thumbnail">
                                <a href="properties-details.html" class="property-img">
                                    <div class="listing-badges">
                                        <span class="featured">Featured</span>
                                    </div>
                                    <div class="tag-for">For Sale</div>
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
                                    <img src="assets/img/property/img-1.png" alt="property-box-5" class="img-fluid">
                                </a>
                                <div class="property-overlay">
                                    <a href="properties-details.html" class="overlay-link">
                                        <i class="fa fa-link"></i>
                                    </a>
                                    <a class="overlay-link property-video" title="Test Title">
                                        <i class="fa fa-video-camera"></i>
                                    </a>
                                    <div class="property-magnify-gallery">
                                        <a href="assets/img/property/img-1.png" class="overlay-link">
                                            <i class="fa fa-expand"></i>
                                        </a>
                                        <a href="assets/img/property/img-2.png" class="hidden"></a>
                                        <a href="assets/img/property/img-3.png" class="hidden"></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-7 col-md-7 align-self-center col-pad">
                            <div class="detail">
                                <!-- title -->
                                <h1 class="title">
                                    <a href="properties-details.html">Modern Family Home</a>
                                </h1>
                                <!-- Location -->
                                <div class="location">
                                    <a href="properties-details.html">
                                        <i class="fa fa-map-marker"></i>123 Kathal St. Tampa City,
                                    </a>
                                </div>
                                <!-- Paragraph -->
                                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy<span class="d-none-1200">nibh euismod…</span></p>
                                <!--  Facilities list -->
                                <ul class="facilities-list clearfix">
                                    <li>
                                        <i class="flaticon-bed"></i> 3 Beds
                                    </li>
                                    <li>
                                        <i class="flaticon-bath"></i> 2 Baths
                                    </li>
                                    <li>
                                        <i class="flaticon-square-layouting-with-black-square-in-east-area"></i> Sq Ft:3400
                                    </li>
                                    <li>
                                        <i class="flaticon-car-repair"></i> 1 Garage
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="property-box-5">
                    <div class="row">
                        <div class="col-lg-5 col-md-5 col-pad">
                            <div class="property-thumbnail">
                                <a href="properties-details.html" class="property-img">
                                    <div class="listing-badges">
                                        <span class="featured">Featured</span>
                                    </div>
                                    <div class="tag-for">For Rent</div>
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
                                    <img src="assets/img/property/img-2.png" alt="property-box-5" class="img-fluid">
                                </a>
                                <div class="property-overlay">
                                    <a href="properties-details.html" class="overlay-link">
                                        <i class="fa fa-link"></i>
                                    </a>
                                    <a class="overlay-link property-video" title="Test Title">
                                        <i class="fa fa-video-camera"></i>
                                    </a>
                                    <div class="property-magnify-gallery">
                                        <a href="assets/img/property/img-2.png" class="overlay-link">
                                            <i class="fa fa-expand"></i>
                                        </a>
                                        <a href="assets/img/property/img-3.png" class="hidden"></a>
                                        <a href="assets/img/property/img-4.png" class="hidden"></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-7 col-md-7 align-self-center col-pad">
                            <div class="detail">
                                <!-- title -->
                                <h1 class="title">
                                    <a href="properties-details.html">Relaxing Apartment</a>
                                </h1>
                                <!-- Location -->
                                <div class="location">
                                    <a href="properties-details.html">
                                        <i class="fa fa-map-marker"></i>123 Kathal St. Tampa City,
                                    </a>
                                </div>
                                <!-- Paragraph -->
                                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy<span class="d-none-1200">nibh euismod…</span></p>
                                <!--  Facilities list -->
                                <ul class="facilities-list clearfix">
                                    <li>
                                        <i class="flaticon-bed"></i> 3 Beds
                                    </li>
                                    <li>
                                        <i class="flaticon-bath"></i> 2 Baths
                                    </li>
                                    <li>
                                        <i class="flaticon-square-layouting-with-black-square-in-east-area"></i> Sq Ft:3400
                                    </li>
                                    <li>
                                        <i class="flaticon-car-repair"></i> 1 Garage
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="property-box-5">
                    <div class="row">
                        <div class="col-lg-5 col-md-5 col-pad">
                            <div class="property-thumbnail">
                                <a href="properties-details.html" class="property-img">
                                    <div class="listing-badges">
                                        <span class="featured">Featured</span>
                                    </div>
                                    <div class="tag-for">For Sale</div>
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
                                    <img src="assets/img/property/img-3.png" alt="property-box-5" class="img-fluid">
                                </a>
                                <div class="property-overlay">
                                    <a href="properties-details.html" class="overlay-link">
                                        <i class="fa fa-link"></i>
                                    </a>
                                    <a class="overlay-link property-video" title="Test Title">
                                        <i class="fa fa-video-camera"></i>
                                    </a>
                                    <div class="property-magnify-gallery">
                                        <a href="assets/img/property/img-3.png" class="overlay-link">
                                            <i class="fa fa-expand"></i>
                                        </a>
                                        <a href="assets/img/property/img-4.png" class="hidden"></a>
                                        <a href="assets/img/property/img-5.png" class="hidden"></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-7 col-md-7 align-self-center col-pad">
                            <div class="detail">
                                <!-- title -->
                                <h1 class="title">
                                    <a href="properties-details.html">Beautiful Single Home</a>
                                </h1>
                                <!-- Location -->
                                <div class="location">
                                    <a href="properties-details.html">
                                        <i class="fa fa-map-marker"></i>123 Kathal St. Tampa City,
                                    </a>
                                </div>
                                <!-- Paragraph -->
                                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy<span class="d-none-1200">nibh euismod…</span></p>
                                <!--  Facilities list -->
                                <ul class="facilities-list clearfix">
                                    <li>
                                        <i class="flaticon-bed"></i> 3 Beds
                                    </li>
                                    <li>
                                        <i class="flaticon-bath"></i> 2 Baths
                                    </li>
                                    <li>
                                        <i class="flaticon-square-layouting-with-black-square-in-east-area"></i> Sq Ft:3400
                                    </li>
                                    <li>
                                        <i class="flaticon-car-repair"></i> 1 Garage
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="pagination-box text-center">
                    <nav aria-label="Page navigation example">
                        <ul class="pagination">
                            <li class="page-item"><a class="page-link" href="properties-list-rightside.html"><span aria-hidden="true">«</span></a></li>
                            <li class="page-item"><a class="page-link" href="properties-list-rightside.html">1</a></li>
                            <li class="page-item"><a class="page-link active" href="properties-list-leftside.html">2</a></li>
                            <li class="page-item"><a class="page-link" href="properties-list-fullwidth.html">3</a></li>
                            <li class="page-item"><a class="page-link" href="properties-list-fullwidth.html"><span aria-hidden="true">»</span></a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- properties list rightside start -->

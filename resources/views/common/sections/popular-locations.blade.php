<!-- Most popular places start -->
@if(count($popular_locations) > 0)
    <div class="most-popular-places content-area-23 bg-white">
        <div class="container">
            <div class="main-title">
                <h1>Most Popular Places</h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod.</p>
            </div>
            <div class="container">
                <div class="row">
                    @foreach($popular_locations as $i => $location)
                        <div class="col-lg-4 col-md-12 col-pad wow fadeInLeft delay-04s">
                            <div class="row">
                                <div class="col-lg-12 col-md-6 col-sm-12 cp-2">
                                    <div class="most-popular-box-1">
                                        <div class="thumb-photo">
                                            <img src="{{ asset('img') . '/' . $location->image }}" alt="img" class="img-fluid">
                                            <div class="content"></div>
                                            <div class="inner">
                                                <div class="info">
                                                    <h3><a href="#">{{ $location->title }}</a></h3>
                                                    <p>{{ $location->getPropertiesCount() }} Properties</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <!-- Most popular places end -->
@endif

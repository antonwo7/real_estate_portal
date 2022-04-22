<!-- services start -->
<div class="services content-area-20 bg-white">
    <div class="container">
        <div class="main-title">
            <h1>What Are you Looking For?</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod.</p>
        </div>
        <div class="row">
            @foreach($services as $i => $service)
                <div class="col-lg-4 col-md-12 col-sm-12 wow fadeInLeft delay-04s">
                    <div class="services-info-2">
                        <div class="inner">
                            <div class="inner-top">
                                <i class="{{ $service->icon }}"></i>
                                <h4><a href="#">{{ $service->title }}</a></h4>
                                <h6>{{ $service->subtitle }}</h6>
                                <p>{{ $service->text }}</p>
                            </div>
                            <div class="inner-buttom si1">
                                <i class="{{ $service->icon }}"></i>
                                <h4><a href="#">{{ $service->title }}</a></h4>
                                <h6>{{ $service->subtitle }}</h6>
                                <p>{{ $service->text }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach

            <div class="col-lg-12 text-center">
                <a data-animation="animated fadeInUp delay-10s" href="/services" class="btn-1"><span>More Details</span></a>
            </div>
        </div>
    </div>
</div>
<!-- services end -->

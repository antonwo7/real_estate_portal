<!-- Banner start -->
<div class="banner" id="banner">
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            @foreach($sliders as $i => $slider)
                <div class="carousel-item {{ $i == 0 ? 'active' : '' }} item-bg">
                    <img class="d-block w-100 h-100" src="{{ asset('/img') . $slider->image }}" alt="banner">
                    <div class="carousel-caption banner-slider-inner d-flex h-100 text-center">
                        <div class="carousel-content container b1-inner-2">
                            <div class="t-center">
                                <h5 data-animation="animated fadeInDown delay-05s">{{ $slider->subtitle }}</h5>
                                <h1 data-animation="animated fadeInDown delay-05s">{{ $slider->title }}</h1>
                                <a data-animation="animated fadeInUp delay-10s" href="{{ $slider->link }}" class="btn btn-2 btn-theme"><span>More Details</span></a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="btn-secton">
            <ol class="carousel-indicators">
                @foreach($sliders as $i => $slider)
                    <li data-target="#carouselExampleIndicators" data-slide-to="{{ $i }}"></li>
                @endforeach
            </ol>
        </div>
    </div>
</div>
<!-- banner end -->

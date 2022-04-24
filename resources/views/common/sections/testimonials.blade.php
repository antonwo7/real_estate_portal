@if(!empty($testimonials))
    <!-- Testimonial 2 start -->
    <div class="testimonial-2 content-area-20">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="main-title">
                        <h1>Our Testimonial</h1>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod.</p>
                    </div>
                </div>
            </div>
            <!-- Slick slider area start -->
            <div class="slick-slider-area">
                <div class="row slick-carousel" data-slick='{"slidesToShow": 2, "responsive":[{"breakpoint": 1024,"settings":{"slidesToShow": 1}}, {"breakpoint": 768,"settings":{"slidesToShow": 1}}]}'>
                    @foreach($testimonials as $testimonial)
                        <div class="slick-slide-item">
                            <div class="testimonials-inner">
                                <div class="user">
                                    @if($testimonial->avatar)
                                        <a href="#">
                                            <img class="media-object" src="{{ asset('/img') . '/' . $testimonial->avatar }}" alt="{{ $testimonial->name }}">
                                        </a>
                                    @endif
                                </div>
                                <div class="testimonial-info">
                                    @if($testimonial->name)
                                        <h3>{{ $testimonial->name }}</h3>
                                    @endif

                                    @if($testimonial->position)
                                        <p>{{ $testimonial->position }}</p>
                                    @endif

                                    <p>{{ $testimonial->text }}</p>

                                    <div class="rating">
                                        @for ($i = 1; $i <= $testimonial->rating; $i++)
                                            <i class="fa fa-star"></i>
                                        @endfor

                                        @for ($i = 1; $i <= 5 - $testimonial->rating; $i++)
                                            <i class="fa fa-star-o"></i>
                                        @endfor
                                        <span>Rating</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial 2 end -->
@endif

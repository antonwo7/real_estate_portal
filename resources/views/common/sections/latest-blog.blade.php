@if(!empty($news))
    <!-- Blog start -->
    <div class="blog content-area-2">
        <div class="container">
            <div class="main-title">
                <h1>{{ $page_meta['blog-section-title'] }}</h1>
                <p>{{ $page_meta['blog-section-subtitle'] }}</p>
            </div>
            <div class="row">
                @foreach($news as $new)
                    <div class="col-lg-6 col-md-6 wow fadeInLeft delay-04s">
                        <div class="row blog-3">
                            <div class="col-lg-5 col-md-12 col-pad ">
                                <div class="blog-photo">
                                    @if($new->image)
                                        <img src="{{ asset('img/news') . '/' . $new->image }}" alt="{{ $new->title }}" class="img-fluid">
                                    @endif
                                    @if($new->author)
                                        <div class="user">
                                            @if($new->author->avatar)
                                                <div class="avatar">
                                                    <img src="{{ asset('/img') . '/' . $new->author->avatar }}" alt="" class="img-fluid rounded-circle">
                                                </div>
                                            @endif
                                            @if($new->author->name)
                                                <div class="name">
                                                    <h5>{{ $new->author->name }}</h5>
                                                </div>
                                            @endif
                                        </div>
                                    @endif
                                    <div class="overlay-icon">
                                        <a href="blog-single-sidebar-right.html"><span><i class="flaticon-add"></i></span></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-7 col-md-12 col-pad">
                                <div class="detail clearfix">
                                    <h3>
                                        <a href="blog-single-sidebar-right.html">{{ $new->title }}</a>
                                    </h3>
                                    <p>{{ $new->short_text }}</p>
                                    <div class="blog-footer clearfix">
                                        <div class="float-left">
                                            <p class="date"><i class="flaticon-calendar"></i> {{ $new->created_at }}</p>
                                        </div>
                                        <div class="float-right">
                                            <a href="blog-single-sidebar-right.html">Read more..</a>
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
    <!-- Blog start -->
@endif

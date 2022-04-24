<!-- Featured properties start -->
<div class="featured-properties content-area-7">
    <div class="container-fluid">
        <div class="main-title">
            <h1>{{ $page_meta['featured-section-title'] }}</h1>
            <p>{{ $page_meta['featured-section-subtitle'] }}</p>
        </div>
        <div class="row slick-fullwidth wow fadeInUp delay-04s">
            @foreach($featured_properties as $property)
                <div class="slick-slide-item">
                    @include('common.properties.item-grid')
                </div>
            @endforeach
        </div>
    </div>
</div>
<!-- Featured properties end -->

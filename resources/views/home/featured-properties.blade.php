<!-- Featured properties start -->
<div class="featured-properties content-area-7">
    <div class="container-fluid">
        <div class="main-title">
            <h1>Featured Properties</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod.</p>
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

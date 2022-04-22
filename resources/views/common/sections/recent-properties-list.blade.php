<!-- Recent Properties start -->
<div class="recent-properties content-area-2">
    <div class="container">
        <div class="main-title">
            <h1>Recent Properties</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod.</p>
        </div>
        <div class="row">
            @foreach($recent_properties as $property)
                <div class="col-lg-4 col-md-6 col-sm-12 wow fadeInLeft delay-04s">
                    @include('common.properties.item-grid-2')
                </div>
            @endforeach
        </div>
    </div>
</div>
<!-- Recent Properties end -->

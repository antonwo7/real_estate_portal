<div class="property-box">
    <div class="property-thumbnail">
        <a href="#" class="property-img">
            <div class="listing-badges">
                @if($property->featured)
                    <span class="featured">Featured</span>
                @endif
            </div>
            <div class="tag-for">For Sale</div>
            @if($property->price)
                <div class="plan-price"><sup>$</sup>{{ $property->price }}<span></span> </div>
            @endif
            @if(!empty($property->images))
                <img src="{{ asset('img/property') . '/' . $property->images[0] }}" alt="property-box" class="img-fluid">
            @endif
        </a>
        <div class="property-overlay">
            <a href="properties-details.html" class="overlay-link">
                <i class="fa fa-link"></i>
            </a>
            <a class="overlay-link property-video" title="Test Title">
                <i class="fa fa-video-camera"></i>
            </a>
            @if(count($property->images) > 1)
                <div class="property-magnify-gallery">
                    @foreach($property->images as $i => $image)
                        @if($i > 0)
                            @if($i === 1)
                                <a href="{{ asset('/img/property') . '/' . $image }}" class="overlay-link">
                                    <i class="fa fa-expand"></i>
                                </a>
                            @else
                                <a href="{{ asset('/img/property') . '/' . $image }}" class="hidden"></a>
                            @endif
                        @endif
                    @endforeach
                </div>
            @endif
        </div>
    </div>
    <div class="detail">
        <h1 class="title">
            <a href="properties-details.html">{{ $property->title }}</a>
        </h1>
        <div class="location">
            @if($property->address)
                <a href="properties-details.html">
                    <i class="flaticon-facebook-placeholder-for-locate-places-on-maps"></i>{{ $property->address }}
                </a>
            @endif
        </div>
        <ul class="facilities-list clearfix">
            @if($property->bedrooms || $property->bedrooms === 0)
                <li>
                    <i class="flaticon-bed"></i> {{ $property->bedrooms }} Bedrooms
                </li>
            @endif
            @if($property->bathrooms)
                <li>
                    <i class="flaticon-bath"></i> {{ $property->bathrooms }} Bathrooms
                </li>
            @endif
            @if($property->square)
                <li>
                    <i class="flaticon-square-layouting-with-black-square-in-east-area"></i> Sqm: {{ $property->square }}
                </li>
            @endif
        </ul>
    </div>
    <div class="footer">
        <a href="#">
            <i class="fa fa-user"></i> Jhon Doe
        </a>
        <span>
            <i class="fa fa-calendar-o"></i> 2 years ago
        </span>
    </div>
</div>
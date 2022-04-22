<div class="property-box-2 light-bg">
    <a href="#" class="thumbnail-photo">
        @if(!empty($property->images))
            <img src="{{ asset('img/property') . '/' . $property->images[0] }}" alt="{{ $property->title }}" class="img-fluid">
        @endif
    </a>
    <div class="content light-bg transition">
        <h4 class="title">
            <a href="properties-details.html">{{ $property->title }}</a>
        </h4>
        <p>{{ $property->short_description }}</p>
        <div class="transition clearfix">
            <ul class="facilities-list clearfix">
                @if($property->bedrooms || $property->bedrooms === 0)
                    <li>
                        <i class="flaticon-bed"></i> {{ $property->bedrooms }} Beds
                    </li>
                @endif
                @if($property->bathrooms)
                    <li>
                        <i class="flaticon-bath"></i> {{ $property->bathrooms }} Bath
                    </li>
                @endif
                @if($property->square)
                    <li>
                        <i class="flaticon-square-layouting-with-black-square-in-east-area"></i> Sqm: {{ $property->square }}
                    </li>
                @endif
            </ul>
        </div>
    </div>
</div>

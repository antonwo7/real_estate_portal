@if(!empty($sidebarTypes))
    <!-- Categories start -->
    <div class="widget categories">
        <h5 class="sidebar-title">Categories</h5>
        <ul>
            @foreach($sidebarTypes as $type)
                <li><a href="#">{{ $type->title }}<span>({{ $type->getPropertiesCount() }})</span></a></li>
            @endforeach
        </ul>
    </div>
    <!-- Recent posts start -->
@endif

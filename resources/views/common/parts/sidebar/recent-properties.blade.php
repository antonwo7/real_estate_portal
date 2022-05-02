@if(!empty($sidebarRecentProperties))
    <!-- Recent posts start -->
    <div class="widget recent-posts">
        <h5 class="sidebar-title">Recent Properties</h5>
        @foreach($sidebarRecentProperties as $property)
            <div class="media mb-4">
                <a href="{{ $property->url }}">
                    <img src="{{ $property->images[0] }}" alt="{{ $property->title }}">
                </a>
                <div class="media-body align-self-center">
                    <h5>
                        <a href="{{ $property->url }}">{{ $property->title }}</a>
                    </h5>
                    <p>{{ $property->created_at }} | ${{ $property->price }}</p>
                </div>
            </div>
        @endforeach
    </div>
@endif

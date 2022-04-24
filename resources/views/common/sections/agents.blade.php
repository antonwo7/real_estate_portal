@if(!empty($agents))
    <!-- Agent start -->
    <div class="agent content-area-2">
        <div class="container">
            <div class="main-title">
                <h1>Meet Our Agents</h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod.</p>
            </div>
            <div class="row">
                @foreach($agents as $agent)
                    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 wow fadeInLeft delay-04s">
                        <div class="agent-2">
                            <div class="photo">
                                <img src="{{ asset('/img') . '/' . $agent->avatar }}" alt="agent-grid-2" class="img-fluid">
                                @if(!empty($agent->nets))
                                    <div class="overlay">
                                        <div class="border">
                                            @foreach($agent->nets as $net)
                                                <div class="icon-holder">
                                                    <a href="{{ $net['link'] }}" class="{{ $net['slug'] }}-bg"><i class="fa {{ $net['icon'] }}"></i></a>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                @endif
                            </div>
                            <div class="agent-details">
                                <h5><a href="agent-detail.html">{{ $agent->name }}</a></h5>
                                <p>{{ $agent->position }}</p>
                                <p>{{ count($agent->properties) }} properties</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div >
    <!-- Agent end -->
@endif

<!-- Our newslatters start -->
<div class="our-newslatters">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h3>{{ $page_meta['subscription-section-title'] }}</h3>
                <p>{{ $page_meta['subscription-section-subtitle'] }}</p>
                <div class="form-info">
                    <form action="{{ url('subscribe') }}" method="post">
                        @csrf
                        <input type="email" name="email" class="form-control" placeholder="Email">
                        <button type="submit" class="btn btn-md btn-message btn-4">Subscribe</button>
                    </form>
                    @switch(session()->get('subscription'))
                        @case('exist')
                            <div class="alert alert-warning mt-3" role="alert">This email is already subscribed!</div>
                            @break
                        @case('error')
                            <div class="alert alert-danger mt-3" role="alert">Error while subscribing!</div>
                            @break
                        @case('success')
                            <div class="alert alert-success mt-3" role="alert">This email was subscribed!</div>
                    @endswitch
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Our newslatters end -->

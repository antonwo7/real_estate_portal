<!-- Sub banner start -->
<div class="sub-banner" @if(!empty($page_meta['header-banner'])) {{ 'style="background: url(' . asset('/img') . '/' . ')' }} @endif >
    <div class="container">
        <div class="breadcrumb-area">
            <h1>{{ $page_title }}</h1>
            <ul class="breadcrumbs">
                <li><a href="/">Home</a></li>
                <li class="active">{{ $page_title }}</li>
            </ul>
        </div>
    </div>
</div>
<!-- Sub banner end -->

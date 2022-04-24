<!-- Sub banner start -->
<div class="sub-banner" style="background: url({{ asset('/img') . '/' . $page_meta['header-banner'] }})">
    <div class="container">
        <div class="breadcrumb-area">
            <h1>{{ $page->title }}</h1>
            <ul class="breadcrumbs">
                <li><a href="/">Home</a></li>
                <li class="active">{{ $page->title }}</li>
            </ul>
        </div>
    </div>
</div>
<!-- Sub banner end -->

<!-- Sidenav start -->
<nav id="sidebar" class="nav-sidebar">
    <!-- Close btn-->
    <div id="dismiss">
        <i class="fa fa-close"></i>
    </div>
    <div class="sidebar-inner">
        <div class="sidebar-logo">
            <img src="{{ asset('/img'). $settings['black_logo_file'] }}" alt="{{ $settings['site_title'] }}">
        </div>
        <div class="sidebar-navigation">
            <h3 class="heading">Pages</h3>
            <ul class="menu-list">
                <li>
                    <a href="/" class="active pt0">Index <em class="fa fa-chevron-down"></em></a>
                </li>
            </ul>
        </div>
        <div class="get-in-touch">
            <h3 class="heading">Get in Touch</h3>
            <div class="media">
                <i class="fa fa-phone"></i>
                <div class="media-body">
                    <a href="tel:{{ $settings['phone'] }}">{{ $settings['phone'] }}</a>
                </div>
            </div>
            <div class="media">
                <i class="fa fa-envelope"></i>
                <div class="media-body">
                    <a href="mailto:{{ $settings['email'] }}">{{ $settings['email'] }}</a>
                </div>
            </div>
            <div class="media mb-0">
                <i class="fa fa-fax"></i>
                <div class="media-body">
                    <span>{{ $settings['fax'] }}</span>
                </div>
            </div>
        </div>
        <div class="get-social">
            <h3 class="heading">Get Social</h3>
            @foreach($settings['nets'] as $net)
                <a href="{{ $net['url'] }}" class="{{ $net['slug'] }}-bg">
                    <i class="fa {{ $net['icon'] }}"></i>
                </a>
            @endforeach
        </div>
    </div>
</nav>
<!-- Sidenav end -->

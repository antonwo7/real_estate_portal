<!-- main header start -->
<header class="main-header sticky-header" id="main-header-2">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav class="navbar navbar-expand-lg navbar-light rounded">
                    <a class="navbar-brand logo" href="/">
                        <img
                            src="{{ asset('/img/') . $settings['white_logo_file'] }}"
                            data-white-logo="{{ asset('/img/') . $settings['white_logo_file'] }}"
                            data-black-logo="{{ asset('/img/') . $settings['black_logo_file'] }}"
                            alt="{{ $settings['site_title'] }}"
                        >
                    </a>
                    <button class="navbar-toggler" type="button" id="drawer">
                        <span class="fa fa-bars"></span>
                    </button>
                    @if(!empty($menu))
                        <div class="collapse navbar-collapse" id="navbar">
                            <ul class="navbar-nav justify-content-end ml-auto">
                                @foreach($menu as $item)
                                    <li class="nav-item dropdown active">
                                        <a class="nav-link" href="{{ url($item->slug) }}">
                                            {{ $item->title }}
                                        </a>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                </nav>
            </div>
        </div>
    </div>
</header>
<!-- main header end -->

@include('common.header.head')

<body id="top" class="index-body">

@include('common.header.loader')

@include('common.header.top-header')
@include('common.header.main-header')
@include('common.header.sidebar')

@yield('content')

@include('common.footer.script')

</body>
</html>

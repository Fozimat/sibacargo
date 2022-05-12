<!DOCTYPE html>
<html lang="en">

<head>
    <!-- ========== Meta Tags ========== -->
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="author" content="Siba Cargo" />
    <!-- ======== Page title ============ -->
    <title>SIBA CARGO | Jasa Ekspedisi Murah</title>
    {{-- style --}}
    @include('frontend.template.style')
</head>

<body class="body-wrapper">
    <!-- preloader -->
    @include('frontend.template.preloader')

    {{-- topbar --}}
    @include('frontend.template.topbar')

    {{-- menu --}}
    @include('frontend.template.menu')

    @yield('content')

    {{-- footer --}}
    @include('frontend.template.footer')

    <!--  ALl JS Plugins
    ====================================== -->
    @include('frontend.template.script')
</body>

</html>
<!DOCTYPE html>
<html class="no-js" lang="en">

@include('layouts.head')

<body class="biolife-body">

    <!-- Preloader -->
    @include('layouts.preloader')


    <!-- HEADER -->
    @include('layouts.header')


    <!-- Page Contain -->
    @yield('content')

    <!-- FOOTER -->
    @include('layouts.footer')


    <!--Footer For Mobile-->
    @include('layouts.footer_mobile')


    <!--Mobile Global Menu-->
    @include('layouts.footer_mobile')


    <!--Quickview Popup-->
    @include('layouts.quickview_popup')

    <!-- Scroll Top Button -->
    <a class="btn-scroll-top"><i class="biolife-icon icon-left-arrow"></i></a>

    @include('layouts.script')

</body>

</html>

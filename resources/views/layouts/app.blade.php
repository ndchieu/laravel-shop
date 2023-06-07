<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

@include('website.frontend.layouts.head')

<body>
    <!--? Preloader Start -->
    <div id="preloader-active">
        <div class="preloader d-flex align-items-center justify-content-center">
            <div class="preloader-inner position-relative">
                <div class="preloader-circle"></div>
                <div class="preloader-img pere-text">
                    <img src="{{ asset('frontend/assets/img/logo/logo.png') }}" alt="">
                </div>
        </div>
        </div>
    </div>
    <!-- Preloader Start -->
    @include('website.frontend.layouts.header')

    @yield('content')

    @include('website.frontend.layouts.footer')
    @include('website.frontend.layouts.foot')

</body>
</html>

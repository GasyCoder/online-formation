<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>{{ config('app.name', 'Laravel') }}</title>
        <!-- Scripts -->
      <link href="{{ asset('assets/css/styles.css') }}" rel="stylesheet">
    </head>
    <body>

       <div id="main-wrapper">
            <!-- Start Navigation -->
            <div class="{{ Route::is('home') ? 'header header-transparent dark-text' : 'header-light'}}">
                <div class="container">
                   <livewire:layout.nav/>
                </div>
            </div>

            <!-- End Navigation -->
            <div class="clearfix"></div>

            <!-- Page Content -->
            {{ $slot }}

            @include('pages.footer_cpy')
            <a id="back2Top" class="top-scroll" title="Back to top" href="#"><i class="ti-arrow-up"></i></a>
        </div>

    <!-- ======== All Jquery========= -->
        <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
        <script src="{{ asset('assets/js/popper.min.js') }}"></script>
        <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('assets/js/select2.min.js') }}"></script>
        <script src="{{ asset('assets/js/slick.js') }}"></script>
        <script src="{{ asset('assets/js/moment.min.js') }}"></script>
        <script src="{{ asset('assets/js/daterangepicker.js') }}"></script>
        <script src="{{ asset('assets/js/summernote.min.js') }}"></script>
        <script src="{{ asset('assets/js/metisMenu.min.js') }}"></script>
        <script src="{{ asset('assets/js/custom.js') }}"></script>
        <!-- ======This page plugins ========== -->
</body>
</html>

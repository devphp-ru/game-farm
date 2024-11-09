<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta name="robots" content="noindex,nofollow">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <link rel="stylesheet" href="{{ asset('assets/admin/plugins/fontawesome-free/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/admin/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/admin/plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/admin/plugins/bootstrap-fileinput-5.5.2/css/fileinput.min.css') }}">
    <!-- Select2 -->
    <link rel="stylesheet" href="{{ asset('assets/admin/plugins/select2/css/select2.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/admin/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css') }}">
    <!-- JQVMap -->
    <link rel="stylesheet" href="{{ asset('assets/admin/plugins/jqvmap/jqvmap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/admin/dist/css/adminlte.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/admin/plugins/overlayScrollbars/css/OverlayScrollbars.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/admin/plugins/daterangepicker/daterangepicker.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/admin/plugins/summernote/summernote-bs4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/assets/libs/toastr-master/build/toastr.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/admin/css/style.css') }}">

    @stack('custom_css')
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">
@include('admin.layouts.components._navbar')
@include('admin.layouts.components._sidebar')
<div class="content-wrapper">
@include('admin.layouts.components._breadcrumb')
<section class="content">
<div class="container-fluid">
@yield('_content')
</div>
</section>
</div>
@include('admin.layouts.components._footer')
<aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
</aside>
</div>
<script src="{{ asset('assets/admin/plugins/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('assets/admin/plugins/jquery-ui/jquery-ui.min.js') }}"></script>
<script src="{{ asset('/assets/libs/toastr-master/toastr.js') }}"></script>
<script>
    $.widget.bridge('uibutton', $.ui.button)
</script>
<script src="{{ asset('assets/admin/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!-- Select2 -->
<script src="{{ asset('assets/admin/plugins/select2/js/select2.full.min.js') }}"></script>
<script src="{{ asset('assets/admin/plugins/bs-custom-file-input/bs-custom-file-input.js') }}"></script>
<script src="{{ asset('assets/admin/plugins/chart.js/Chart.min.js') }}"></script>
<script src="{{ asset('assets/admin/plugins/sparklines/sparkline.js') }}"></script>
<script src="{{ asset('assets/admin/plugins/jqvmap/jquery.vmap.min.js') }}"></script>
<script src="{{ asset('assets/admin/plugins/jqvmap/maps/jquery.vmap.usa.js') }}"></script>
<script src="{{ asset('assets/admin/plugins/jquery-knob/jquery.knob.min.js') }}"></script>
<script src="{{ asset('assets/admin/plugins/moment/moment.min.js') }}"></script>
<script src="{{ asset('assets/admin/plugins/daterangepicker/daterangepicker.js') }}"></script>
<script src="{{ asset('assets/admin/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js') }}"></script>
<script src="{{ asset('assets/admin/plugins/summernote/summernote-bs4.min.js') }}"></script>
<script src="{{ asset('assets/admin/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js') }}"></script>
<script src="{{ asset('assets/admin/dist/js/adminlte.js') }}"></script>
<!-- script src="{{ asset('assets/admin/dist/js/pages/dashboard.js') }}"></script -->
@stack('libs_js')
<script src="{{ asset('assets/admin/js/script.js') }}"></script>
@stack('custom_js')

@if (session()->has('success'))
<script>
toastr.success("{!! session('success') !!}")
</script>
@endif
@if (session()->has('errors'))
<script>
toastr.error("{!! session('errors') !!}")
</script>
@endif
@if (session()->has('error'))
<script>
toastr.error("{!! session('error') !!}")
</script>
@endif
@if (isset($errors) && !empty($errors->first('error')))
<script>
toastr.error("{!! $errors->first('error') !!}")
</script>
@endif
</body>
</html>

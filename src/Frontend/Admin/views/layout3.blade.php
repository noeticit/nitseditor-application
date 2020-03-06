<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>NitsEditor: A product of Noetic IT Services Pvt. Ltd.</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

        <link rel="icon" type="image/png" sizes="16x16" href="/logo/bx_logo.png">
        <meta name="description" content="Login Page">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <meta name="csrf-token" content="{{ csrf_token() }}">
{{--        <link href="/nits-assets/maps-india/jsmaps/jsmaps.css" rel="stylesheet" type="text/css" />--}}
        <!--begin::Web font -->
        <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.16/webfont.js"></script>
        <script>
            WebFont.load({
                google: {"families":["Poppins:300,400,500,600,700","Roboto:300,400,500,600,700"]},
                active: function() {
                    sessionStorage.fonts = true;
                }
            });
        </script>

    </head>
    <body class="kt-quick-panel--right kt-demo-panel--right kt-offcanvas-panel--right kt-header--fixed kt-header-mobile--fixed kt-subheader--fixed kt-subheader--enabled kt-subheader--solid kt-aside--enabled kt-aside--fixed kt-aside--minimize">

        <div id="layout-three" style="height: 100%;">

        </div>

        <!-- Global User data object -->
        <script>
            window.nitseditor = @json($nitseditor);
        </script>

        <!-- Global User data object end -->

        <script src="{{ mix('nits-assets/js/admin/layout-three.js') }}"></script>
        <!-- Map scripts  -->
        <script src="/nits-assets/maps-india/jsmaps/jsmaps-libs.js" type="text/javascript"></script>
        <!-- End Map scripts -->

{{--        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>--}}
{{--        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>--}}

    </body>
</html>

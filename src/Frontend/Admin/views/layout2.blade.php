<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>NitsEditor: A product of Noetic IT Services Pvt. Ltd.</title>
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
    <body class="kt-header--fixed kt-header-mobile--fixed kt-subheader--enabled kt-subheader--solid kt-aside--enabled kt-aside--fixed kt-aside--minimize kt-page--loading">

        <div id="layout-two" style="height: 100%;">

        </div>

        <!-- Global User data object -->
        <script>
            window.nitseditor = @json($nitseditor);
        </script>

        <script src="{{ mix('nits-assets/js/admin/layout-two.js') }}"></script>

        <!-- Map scripts  -->
        <script src="/nits-assets/maps-india/jsmaps/jsmaps-libs.js" type="text/javascript"></script>
        <!-- End Map scripts -->

    </body>
</html>

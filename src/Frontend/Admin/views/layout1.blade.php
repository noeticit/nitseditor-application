<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>NitsEditor: A product of Noetic IT Services Pvt. Ltd.</title>
        <meta name="description" content="Login Page">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <meta name="csrf-token" content="{{ csrf_token() }}">
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
    <body style="background-image: url(/nits-assets/media/demo4/bg/header.jpg); background-position: center top; background-size: 100% 350px;" class="kt-page--loading-enabled kt-page--loading kt-page--fixed kt-header--fixed kt-header--minimize-menu kt-header-mobile--fixed kt-subheader--enabled kt-subheader--transparent kt-page--loading">

        <div id="layout-one" style="height: 100%;">

        </div>

        <!-- Global User data object -->
        <script>
            window.nitseditor = @json($nitseditor);
        </script>

        <script src="https://cdn.ckeditor.com/4.11.4/standard/ckeditor.js"></script>
        <script src="{{ mix('nits-assets/js/admin/layout-one.js') }}"></script>
    </body>
</html>

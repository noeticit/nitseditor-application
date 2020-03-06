<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <title>NitsEditor: A product of Noetic IT Services Pvt. Ltd.</title>
    <meta name="description" content="Nits Editor home">
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
<body>
    <div id="app"></div>

<!-- Global User data object -->
<script>
    window.nitseditor = @json($nitseditor);
</script>

<script src="{{ mix('nits-assets/js/app.js') }}"></script>
</body>
</html>

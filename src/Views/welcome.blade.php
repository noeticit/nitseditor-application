<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <title>NitsEditor: A product of Noetic IT Services Pvt. Ltd.</title>
    <meta name="description" content="Nits Editor home">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="{{ mix('nits-assets/css/app.css') }}">
</head>
<body>
    <div id="app"></div>

<!-- Global User data object -->
<script>
    window.nitseditor = @json($nitseditor);
</script>

{{--<script src="{{ asset('nits-assets/js/manifest.js') }}"></script>--}}
{{--<script src="{{ mix('nits-assets/chunks//nits-assets/js/vendor.js') }}"></script>--}}
{{--<script src="{{ mix('nits-assets/chunks//nits-assets/js/app.js') }}"></script>--}}
<script src="{{ mix('nits-assets/js/app.js') }}"></script>
</body>
</html>

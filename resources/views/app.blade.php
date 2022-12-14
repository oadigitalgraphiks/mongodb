<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ get_setting('site_name')}}</title>

	<link rel="icon" href="{{asset('/admin/assets/img/favicon.png')}}">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
    <link href="{{asset('admin/assets/backend/css/style.bundle.css')}}" rel="stylesheet" type="text/css" />
    <style>
        body {
            font-size: 12px;
        }
    </style>
</head>
<body>
    @yield('content')

</body>
</html>

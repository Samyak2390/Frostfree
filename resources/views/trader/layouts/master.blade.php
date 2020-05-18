<!DOCTYPE html>
<html lang="en">
<head>
    <title>@yield('title','Master Page')</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    @if(strcmp(Route::current()->uri, "trader/profile/create") == 0)
        <link rel='stylesheet' href='{{ URL::asset('css/style.css') }}' type='text/css' media='all'/>
    @endif
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}" />
    <link rel="stylesheet" href="{{asset('css/bootstrap-responsive.min.css')}}" />
    <link rel="stylesheet" href="{{asset('css/colorpicker.css')}}" />
    <link rel="stylesheet" href="{{ asset('css/uniform.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/select2.css') }}" />
    <link rel="stylesheet" href="{{asset('css/fullcalendar.css')}}" />
    <link rel="stylesheet" href="{{asset('css/matrix-style.css')}}" />
    <link rel="stylesheet" href="{{asset('css/matrix-media.css')}}" />
    <link rel="stylesheet" href="{{asset('css/bootstrap-wysihtml5.css')}}" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
    <link href="{{asset('font-awesome/css/font-awesome.css')}}" rel="stylesheet" />
    <link rel="stylesheet" href="{{asset('css/jquery.gritter.css')}}" />
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800' rel='stylesheet' type='text/css'>
    <style>
        body{
            font-size: 16px;
        }
    </style>
    @yield('addCss')
</head>
<body>

@include('trader.layouts.header')
@include('trader.layouts.nav')

<!--main-container-part-->
<div id="content">
    @yield('content')
</div>
@include('trader.layouts.footer')
@yield('jsblock')
<script src="{{asset('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js')}}"></script>
</body>
</html>

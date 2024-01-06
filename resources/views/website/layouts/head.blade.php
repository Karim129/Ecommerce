<title>@yield('title')</title>

@if( Config::get('app.locale') == 'ar')
<!--RTL Bootstrap CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.rtl.min.css"
    integrity="sha384-gXt9imSW0VcJVHezoNQsP+TNrjYXoGcrqBZJpry9zJt8PCQjobwmhMGaDHTASo9N" crossorigin="anonymous">
@else
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
@endif

<link rel="stylesheet" href="{{asset('assets/css/owl/owl.carousel.min.css')}}">
<link rel="stylesheet" href="{{asset('assets/css/owl/owl.theme.default.css')}}">


@yield('css')
<!DOCTYPE html>
<html>
<head>
    <title>@yield('title')</title>
    @section('head')
        @include('layouts.partials.head')
    @show
</head>
<body>
@include('layouts.partials.nav')
<div class="container">
    @yield('content')
</div>
</body>
</html>

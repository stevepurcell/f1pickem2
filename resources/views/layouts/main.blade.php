<!DOCTYPE html>
<html lang="en" class="light">

    @include('layouts.head')

    <body class="main">
        @include('layouts.mobile-menu')
        @include('layouts.top-bar')
        <div class="wrapper">
            <div class="wrapper-box">
        @include('layouts.side-nav')
                @yield('content')
            </div>
        </div>
    </body>
</html>

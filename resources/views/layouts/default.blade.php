<!doctype html>
<html>
<head>
    @include('includes.head')
</head>
<body>
<div class="container">

    @include('includes.navigation')
    @include('includes.messages')

    <div class="row mt-5">

        @yield('content')

    </div>
</div>
</body>
</html>

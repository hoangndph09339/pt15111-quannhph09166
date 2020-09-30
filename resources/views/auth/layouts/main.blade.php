<!DOCTYPE html>
<html lang="en">

@include('auth.layouts.styles')

<body>
    <div class="container-fluid">
        @include('auth.layouts.navbar')
    </div>
    <div class="container">
        @yield('main-content')
    </div>
    <div class="container-fluid">
        @include('auth.layouts.footer')
    </div>
</body>

</html>

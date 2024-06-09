<!DOCTYPE html>
<html lang="en-us">

<head>
    <meta charset="utf-8">
    <title>Reader | Hugo Personal Blog Template</title>

    

    <!-- plugins -->
    @include('layouts.partials.headed')

    
</head>

<body>
    @include('layouts.partials.topbar')

    <div class="container">
        @yield('content')
    </div>

    @include('layouts.partials.footer')


    @include('layouts.partials.js')
</body>

</html>
<!DOCTYPE html>
<html lang="en-us">

<head>
    <meta charset="utf-8">
    <title>Reader | Hugo Personal Blog Template</title>

    @include('layouts.detail-pro.head')
</head>

<body>

    @include('layouts.detail-pro.nav')

    <section class="section">
        <div class="container">
            @yield('post-detail')
        </div>
    </section>

    @include('layouts.detail-pro.footer')


    @include('layouts.detail-pro.js')

</html>

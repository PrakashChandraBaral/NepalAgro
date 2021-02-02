<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>

</head>
<body>
    <div >
    @include('navbar')
        

        <main class="py-4">
            @yield('content')
        </main>
    </div>
    @include('footer')
</body>
</html>

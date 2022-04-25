<!doctype html>
<html lang="en">

<head>

    @include('components.style')

    <title>Acodeme</title>
</head>

<body>

    @include('components.navbar')

    @yield('content')

    @include('components.script')

</body>

</html>

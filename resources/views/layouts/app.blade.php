<!doctype html>
<html lang="en">

<head>

    @include('components.style')

    <title>Laracamp</title>
</head>

<body>

    @include('components.navbar')

    @yield('content')

    @include('components.script')

</body>

</html>

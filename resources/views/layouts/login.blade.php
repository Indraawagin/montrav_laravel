<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    @include('includes.style')
    <title>@yield('title')</title>
</head>

<body class="details">

    @yield('content')

    @include('includes.script')
</body>

</html>
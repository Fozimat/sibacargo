<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    {{-- Style --}}
    @include('backend.template.style')
</head>

<body>
    <div id="app">
        {{-- Sidebar --}}
        @include('backend.template.sidebar')
        {{-- Content --}}
        @yield('content')
    </div>
    {{-- Script --}}
    @include('backend.template.script')
</body>

</html>
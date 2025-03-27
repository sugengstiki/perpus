<html>

<head>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles
</head>

<body>
    <h1>Test</h1>
    {{ $slot }}
    @livewireScripts
</body>

</html>
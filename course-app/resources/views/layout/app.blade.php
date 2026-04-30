<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Learning - @yield('title')</title>

    @vite('resources/css/app.css')
</head>
<body class="bg-gray-100">
    
    <header class="bg-white p-5">
        <h1>Aplicación de Posts</h1>
    </header>

    <main class="w-[95%] max-w-6xl mx-auto py-10">
        @yield('content')
    </main>

</body>
</html>
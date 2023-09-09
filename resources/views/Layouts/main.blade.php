<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>MAM Project</title>
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Bangers"/>
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    @vite('resources/css/app.css','resources/js/app.js')
</head>
<body class="bg-primary overflow-x-hidden">
    @include('partials/navbar')
    @yield('container')
    @include('partials/footer')

    <script src="../path/to/flowbite/dist/flowbite.min.js"></script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
      AOS.init();
    </script>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- @vite(['resources/css/app.css', 'resources/js/app.js']) --}}
    <script src="https://use.fontawesome.com/56cdedca16.js"></script>
    @vite([ 'resources/js/app.js', 'resources/css/app.css', 'node_modules/font-awesome/css/font-awesome.min.css'])
    <link rel="stylesheet" href="{{asset('css/fontawesome-all.min.css')}}">
    {{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" /> --}}
    <title>Fuel-Monitor</title>
</head>
<body>
    <nav class="relative container mx-auto p-6">
        {{-- Flex container --}}
        <div class="flex items-center justify-between">
            {{-- Logo --}}
            <div class="pt-2">
                <img src="{{asset('img/logo.svg')}}" alt="">
            </div>
            {{-- Menu Items --}}
            <div class="hidden md:flex space-x-6">
                <a href="" class="hover:text-darkGrayishBlue">Home</a>
                <a href="{{route('all_cars')}}" class="hover:text-darkGrayishBlue">Cars</a>
                <a href="{{route('all_logs')}}" class="hover:text-darkGrayishBlue">Logs</a>
            </div>
            {{-- Button --}}
            <a href="#" class="hidden md:block p-3 px-6 pt-2 text-white bg-brightRed 
            rounded-full baseline hover:bg-brightRedLight">
                Get Started</a>
        </div>
    </nav>       
    @yield('content')
</body>
</html>
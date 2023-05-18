<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        <script src="{{asset('datatable/jquery-3.6.0.js')}}"></script>
        <link rel="stylesheet" href="{{asset('datatable/datatables.css')}}">
        <script src="{{asset('datatable/datatables.js')}}"></script>
    </head>
    <body class="font-sans antialiased">
       <div class="flex">
            <div class="w-56 h-screen bg-gray-200 shadow-lg shadow-red-300">
                <img class="bg-white mx-4 w-44 my-5 rounded-lg py-3" src="https://bitmapitsolution.com/images/logo/logo.png" alt="">

                <div>
                    <a href="" class="text-xl font-bold border-b-2 border-blue-500 block ml-4 px-2 py-1 hover:bg-blue-500 hover:text-white">Dashboard</a>

                    <a href="{{route('category.index')}}" class="text-xl font-bold border-b-2 border-blue-500 block ml-4 px-2 py-1 hover:bg-blue-500 hover:text-white">Categories</a>

                    <a href="{{route('notice.index')}}" class="text-xl font-bold border-b-2 border-blue-500 block ml-4 px-2 py-1 hover:bg-blue-500 hover:text-white">Notices</a>

                    <a href="{{route('gallery.index')}}" class="text-xl font-bold border-b-2 border-blue-500 block ml-4 px-2 py-1 hover:bg-blue-500 hover:text-white">Gallery</a>

                    <a href="{{route('product.index')}}" class="text-xl font-bold border-b-2 border-blue-500 block ml-4 px-2 py-1 hover:bg-blue-500 hover:text-white">Products</a>



                    <a href="" class="text-xl font-bold border-b-2 border-blue-500 block ml-4 px-2 py-1 hover:bg-blue-500 hover:text-white">News</a>
                    
                    <a href="" class="text-xl font-bold border-b-2 border-blue-500 block ml-4 px-2 py-1 hover:bg-blue-500 hover:text-white">Logout</a>
                </div>
            </div>


            <div class=" p-4 flex-1">
                @yield('content')
            </div>
       </div>
    </body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>This is title</title>
    <link rel="stylesheet" href="{{asset('mycss/style.css')}}">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.2.0/fonts/remixicon.css" rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <nav class="navbar">
        <ul class="menu">
            <li><a href="/">Home</a></li>
            @foreach($categories as $category)
            <li><a href="/">{{$category->name}}</a></li>
            @endforeach
            @if(auth()->user())
            <li><a href="">{{auth()->user()->name}}</a></li>
            <li>
                <form class="inline text-white" action="{{route('logout')}}" method="POST">
                    @csrf
                    <button type="submit">OUT</button>
                </form>
            </li>
            @endif
        </ul>
    </nav>

    @yield('content')

    <footer class="footer">
        <p>This is footer</p>
    </footer>

    
</body>
</html>
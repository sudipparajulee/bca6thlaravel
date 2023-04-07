<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>This is title</title>
    <style>
        .navbar{
            background-color: blue;
            padding: 15px;
        }

        .menu{
            text-align: right;
        }

        .menu li{
            display: inline;
            margin: 10px
        }

        .menu a{
            text-decoration: none;
            color: white;
            font-size: 30px;
        }
        .footer{
            background-color: red;
            color: white;
        }
    </style>
</head>
<body>
    <nav class="navbar">
        <ul class="menu">
            <li><a href="/">Home</a></li>
            <li><a href="/about">About</a></li>
            <li><a href="">Contact</a></li>
            <li><a href="">Login</a></li>
        </ul>
    </nav>

    @yield('content')

    <footer class="footer">
        <p>This is footer</p>
    </footer>

    
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title','mylaravel website')</title>
    <style>
        html, body{
            font-family: Arial, sans-serif;
            background-color: #0E0E0E;
            height: 100%;
            margin: 0;
            padding: 0;
            color: white;
        }
        header,footer{
            background-color: #1A1A1A;
            color: white;
            padding: 10px;
            text-align: center;
        }
        nav a{
            color: white;
            margin: 0 15px;
            text-decoration: none;
        }
        nav a:hover{
            text-decoration: underline;
        }
        main{
            padding: 20px;
            h2,p{
                text-align: center;
            }
        }
        .wrapper {
            min-height: 100%;
            display: flex;
            flex-direction: column;
        }
        .content {
            flex: 1;
        }
    </style>
</head>
<body>

    <div class="wrapper">
        <div class="content">
            <header>
                <h1>E Commerce Webpage</h1>
                <nav>
                    <a href="/" id="home">Home</a>
                    <a href="/about" id="about">About</a>
                    <a href="/contact" id="contact">Contact</a>
                </nav>
            </header>
            <main>
                @yield('content')
            </main>
        </div>
    <footer>
        <p>&copy; 2025 laravel</p>
    </footer>
    </div>
</body>
</html>

<?php
    if($current == "home") echo "<style>#home { color: green; text-decoration: underline; }</style>";
    elseif($current == "about") echo "<style>#about { color: green; text-decoration: underline; }</style>";
    elseif($current == "contact") echo "<style>#contact { color: green; text-decoration: underline; }</style>";
?>
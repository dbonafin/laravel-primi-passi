<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>First laravel project</title>

    <!-- Font -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">

    <!-- Css -->
    <style>
        body {
            background-color: lightblue;
            font-family: 'Nunito', sans-serif;
            font-weight: 200;
            height: 100vh;
            margin: 0;
        }

        .flex-center {
            display: flex;
            justify-content: center;
        }

        .flex-center h3 {
            margin: 0 10px;    
        }

        .content {
            text-align: center;
        }

        .title {
            font-size: 80px;
        }

        .bottom {
            height: 80vh;
            align-items: self-end;
        }

        .links > a {
            padding: 0 25px;
            font-size: 13px;
            font-weight: 600;
            text-decoration: none;
            text-transform: uppercase;
        }
    </style>
</head>

<body>

    <div class="flex-center">
        <h1>First Laravel Project Homepage</h1>
    </div>

    <div class="flex-center bottom">
        <h3>Created by {{ $author }}</h3>
        |
        <h3>Powered by {{ $framework }}</h3>
    </div>
    <!--  
        <div class="links">
            <a href="https://laravel.com/docs">Docs</a>
            <a href="https://laracasts.com">Laracasts</a>
            <a href="https://laravel-news.com">News</a>
            <a href="https://blog.laravel.com">Blog</a>
            <a href="https://nova.laravel.com">Nova</a>
            <a href="https://forge.laravel.com">Forge</a>
            <a href="https://vapor.laravel.com">Vapor</a>
            <a href="https://github.com/laravel/laravel">GitHub</a>
        </div> -->
    
</body>
</html>
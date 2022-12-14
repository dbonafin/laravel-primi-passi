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
            height: 60vh;
            align-items: self-end;
        }

        .links {
            width: 50%;
            margin: auto;
            margin-top: 100px;
            display: flex;
            justify-content: space-evenly;
        }

        .links > a {
            margin-top: 40px;
            font-size: 16px;
            font-weight: 600;
            text-decoration: none;
            text-transform: uppercase;
        }
    </style>
</head>

<body>

    <!-- Title -->
    <header class="flex-center">
        <h1>First Laravel Project Homepage</h1> <br>
    </header>


    <!-- Navigation area -->
    <main class="flex-center">

        <div class="links">
            <a href="{{ route('about-us') }}">about us</a>

            <a href="{{ route('contacts') }}">contacts</a>

            <a href="{{ route('documentation') }}">documentation</a>
        </div>

    </main>

    <!--  -->
    <footer class="flex-center bottom">
        <h3>Created by {{ $author }}</h3>
        |
        <h3>Powered by {{ $framework }}</h3>
    </footer>
    
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Documentation page</title>

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

        .about-text {
            text-align: center;
            width: 50%;
            margin: 0 auto;
            align-items: center;
            flex-direction: column;
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
    <h2 class="flex-center">Documentation</h2>

    <div class="flex-center about-text">
        <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam consectetur amet vitae maxime iste et, culpa sapiente. Quos eum magni impedit! Perferendis quod harum qui officiis vitae quisquam, iusto inventore?
            <br>
            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Illum illo, at possimus beatae tempore, sequi cupiditate sit veritatis recusandae distinctio amet dolores, tenetur voluptates aut. Ducimus fuga odit 
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Exercitationem delectus fugit quisquam quibusdam facilis ea quo reiciendis. Modi sapiente ad ut doloribus architecto officia illum nihil rerum sunt, hic blanditiis?Lorem ipsum dolor sit, amet consectetur adipisicing elit. Porro reiciendis sint, quam incidunt totam enim, commodi id vel ea laboriosam maiores alias, ipsum ipsa. Provident facilis a nostrum accusamus fugit.
            <br>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab, alias, quibusdam qui pariatur facere ratione quo mollitia harum doloribus amet delectus. Corrupti, praesentium! Ipsum culpa autem nesciunt fugit quam aperiam.
        </p>
    </div>

    <div class="flex-center links">
        <a href="{{ route('home') }}">Torna alla homepage</a>
    </div>
</body>
</html>
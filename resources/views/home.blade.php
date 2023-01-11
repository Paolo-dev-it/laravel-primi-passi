<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Primi passi Laravel</title>
</head>

<body>
    <h1>Primi passi con Laravel</h1>
    <div class="container">
        <ul>
            <li><a href="/">Home</a></li>
            <li><a href="/about">About</a></li>
            <li><a href="/career">Work With Us</a></li>
            <li><a href="/sponsor">Sponsors</a></li>
        </ul>
    </div>


    <style>
        body {
            font-family: sans-serif;
        }

        h1 {
            text-align: center;
        }

        .container {
            width: 80%;
            margin: auto;
        }

        ul {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        li {
            list-style-type: none;
        }

        a {
            text-decoration: none;
        }

        a:hover {
            color: blue;
        }
    </style>
</body>

</html>
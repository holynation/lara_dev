<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Blog Application</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <style>
            body {
                font-family: 'Nunito', sans-serif;
                max-width: 600px;
                margin: auto;
            }
            p{
                line-height: 1.6;
            }

            article + article{
                margin-top: 3rem;
                padding-top: 3rem;
                border-top: 1px solid #c5c5c5;
            }
        </style>
    </head>
    <body>
        <article>
            <h3>{{$post->title}}</h3>
            <p>{{$post->body}}</p>
        </article>
        <a href="/">Go Back</a>
    </body>
</html>

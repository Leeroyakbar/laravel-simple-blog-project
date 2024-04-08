<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog | Judul : {{ $post[1] }}</title>
    <link rel="stylesheet" href="style.css">

    <link href="{{ asset('bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="{{ asset('css/blog.css')}}" rel="stylesheet">
</head>

<body>
    <div class="container">
        <article class="blog-post">
            <h2 class="display-5 link-body-emphasis mb-1"> {{ $post[1] }} </h2>
            <p class="blog-post-meta">
                {{ date('d M Y H:i', strtotime($post[3])) }}
            </p>
            <p> {{ $post[2] }} </p>
            <a href="/posts" class="btn btn-info">Back</a>
        </article>
    </div>

    <script src="{{ asset('bootstrap/js/bootstrap.min.js')}}" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</body>

</html>
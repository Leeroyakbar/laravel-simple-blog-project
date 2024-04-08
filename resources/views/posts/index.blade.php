<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blogs</title>

    <link href="{{ asset('bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">


    <style>
        .blog {
            padding: 5px;
            border-bottom: 1px solid lightgrey;
        }

        small {
            color: grey;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>Blog Codepolitan</h1>
        <div>
            @php($number = 1)
            @foreach($posts as $post)
            @php($post = explode(",", $post))
            <div class="card mb-3">
                <div class="card-body">
                    <h5 class="card-title">{{$post[1]}}</h5>
                    <p class="card-text">{{$post[2]}}</p>
                    <p class="card-text"><small class="text-body-secondary">Last updated at {{ date('d M Y H:i', strtotime($post[3]))}}</small></p>
                    <a href="#" class="btn btn-primary">Selengkapnya</a>
                </div>
            </div>
            @php($number++)
            @endforeach
        </div>

    </div>


    <script src="{{ asset('bootstrap/js/bootstrap.min.js')}}" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</body>

</html>
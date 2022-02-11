<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>Document</title>
</head>
<body>
    <section>
        @foreach ($movies as $movie)
            <div class="card">
                <ul>
                    <li>
                        Titolo: {{$movie->title}}
                    </li>
                    <li>
                        Original title: {{$movie->original_title}}
                    </li>
                    <li>
                        Nationality: {{$movie->nationality}}
                    </li>
                    <li>
                        Date: {{$movie->date}}
                    </li>
                    <li>
                        Vote: {{$movie->vote}}
                    </li>
                </ul>
            </div>
        @endforeach
    </section>
</body>
</html>

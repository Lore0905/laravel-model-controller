
<section>
    <div class="card">
        <ul>
            @foreach ($movies as $movie)
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
                <br>
                <br>
                <br>
                
                
            @endforeach
        </ul>
    </div>
</section>
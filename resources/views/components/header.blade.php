<div>
    <h1>This is Header component!</h1>
    <p>{{$name}}</p>
    <h3>Fruits are: </h3>
    <ul>
        @foreach ($fruits as $fruit)
        <li>{{$fruit}}</li>
        @endforeach
    </ul>
</div>
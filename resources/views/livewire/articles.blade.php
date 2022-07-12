<div>
    Listado de articulos
    <ul>
        @foreach($articles as $article)
            <li>{{$article->title}}</li>
        @endforeach
</div>

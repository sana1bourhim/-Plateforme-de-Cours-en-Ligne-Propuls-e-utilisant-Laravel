



<div class="container">
    <h1>Information about the category : {{ $category->libelle }}</h1>
    @if ($cours->count() > 0)
        <ul>
            @foreach($cours as $cour)
                <li>
                    <h2>{{ $cour->titre }}</h2>
                    <p>{{ $cour->contenu }}</p>
                </li>
            @endforeach
        </ul>
    @else
        <p>Aucun cours n'est disponible pour cette catégorie.</p>
    @endif
</div>





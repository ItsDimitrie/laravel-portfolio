@extends ('layout');

@section('content')
    <div id="error-message">
        <h1>Error 404</h1>
        <h1>De pagina is niet gevonden of is verwijderd.</h1>
        <p>Onze excuses, maar de pagina die u zoekt kan niet worden gevonden. Het kan zijn verwijderd, van naam veranderd of tijdelijk niet beschikbaar zijn.</p>
        <p>Controleer of het webadres (URL) correct is gespeld en probeer het opnieuw, of gebruik de onderstaande knop om terug te gaan naar de homepage.</p>
        <button><a id="error-button" href="/">Keer terug naar de hoofdpagina</a></button>
    </div>

    <div id="aarde-gif">
    <img src="/img/aardeboem.gif">
    </div>

@endsection

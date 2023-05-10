@extends ('layout');

@section('content')
<div id="error-message">
        <h1>Error 500</h1>
        <h1>Er is iets misgegaan met onze server. Probeer het later opnieuw.</h1>
        <p>Onze excuses, Er is een probleem opgetreden met onze server en we kunnen je verzoek op dit moment niet verwerken.
           Probeer het later opnieuw of neem contact op met de administrator.<p>
        <button><a id="error-button" href="/">Keer terug naar de hoofdpagina</a></button>
    </div>

    <div id="aarde-gif">
    <img src="/img/server-boem.gif">
    </div>

@endsection


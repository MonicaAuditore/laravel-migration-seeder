<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>
        <!-- Styles -->
        @vite('resources/js/app.js')
    </head>
    <body>
        {{-- <img src="{{ Vite::asset('resources/img/logo.png') }}" alt="">  --}}
        <h1>Treni:</h1>
        <main>
            <div class=row>
                <div class="col">
                    @isset($trains)
                    @foreach ($trains as $train)
                        <ul>
                            <li> ID treno: {{$train->id}} </li>
                            <li> Azienda: {{$train->Azienda}} </li>
                            <li> Stazione di partenza {{$train->Stazione_di_partenza}} </li>
                            <li> Stazione di arrivo {{$train->Stazione_di_arrivo}} </li>
                            <li> Codice treno: {{$train->Codice_treno}} </li>
                            
                        </ul>
                    @endforeach
                    @else
                <p>Nessun treno disponibile</p>
            @endisset
                </div>
            </div>
        </main>

    </body>
</html>

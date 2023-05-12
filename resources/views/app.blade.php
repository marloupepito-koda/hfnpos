<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>HFN</title>
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <script src="{{ asset('js/app.js') }}" defer></script>
   
        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">




        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    <body>
        <div id="app">
        </div>
    </body>

    <script type='text/javascript' src='https://secure.trust-provider.com/trustlogo/javascript/trustlogo.js'></script>

        <script type='text/javascript'>
        TrustLogo("https://sectigo.com/images/seals/sectigo_trust_seal_lg_2x.png", "SECEV", "none");
        </script>
</html>

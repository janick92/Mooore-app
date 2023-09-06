<!DOCTYPE html>
<html>
<head>
    <title>Landenlijst</title>
    <!-- Laad de Vite-stijlen in voor de applicatie -->
    @vite('resources/css/app.css')
    <!-- Fallback-stijlen voor als Vite niet beschikbaar is -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body class="bg-primary font-sofia">
    <div class="container min-w-full">
        <table class="border-collapse w-full">
            <h1>List of Countries</h1>
            <ul>
                @foreach ($countries as $country)
                    <li>{{ $country['name']['common'] }}</li>
                @endforeach
            </ul>
        </table>
    </div>
</body>
</html>
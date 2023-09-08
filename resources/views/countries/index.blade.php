<!DOCTYPE html>
<html>
<head>
    <title>Landenlijst</title>
    <!-- Laad de Vite-stijlen in voor de applicatie -->
    @vite('resources/css/app.css')
    <!-- Fallback-stijlen voor als Vite niet beschikbaar is -->
    <link href="{{ asset('resources/css/app.css') }}" rel="stylesheet">
    <script src="{{ asset('resources/js/search.js') }}"></script>
</head>
<body class="bg-primary font-sofia">
    <div class="container min-w-full">
        <h1>List of Countries</h1>
        <input type="text" id="searchInput" placeholder="Search by name or code">
        <table class="border-collapse">
            <thead>
                <tr>
                    <th>Country Name</th>
                    <th>Country Code</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($countries as $country)
                    <tr>
                        <td><a href="{{ route('country.show', ['country' => $country['name']['common'] ]) }}">{{ $country['name']['common'] }}</a></td>

                        <td>{{ $country['cca2']}}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    
</body>
</html>
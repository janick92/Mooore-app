<!DOCTYPE html>
<html>
<head>
    <title>Country Information</title>
    <!-- Laad de Vite-stijlen in voor de applicatie -->
    @vite('resources/css/app.css')
    <!-- Fallback-stijlen voor als Vite niet beschikbaar is -->
    <link href="{{ asset('resources/css/app.css') }}" rel="stylesheet">
</head>
<body>
    <h1>Country Information</h1>
    <p>Country Name: {{ $country }}</p>
    <!-- Add more information about the country here -->
</body>
</html>

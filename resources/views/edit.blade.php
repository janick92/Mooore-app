<!DOCTYPE html>
<html>
<head>
    <title>Items List</title>
    <!-- Vite-stijlen voor de applicatie -->
    @vite('resources/css/app.css')
    <!-- Fallback-stijlen voor als Vite niet beschikbaar is -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body class="p-6 bg-primary">
    <!-- Kop van de pagina met titel -->
    <h1 class="pb-6 text-3xl">Verander het aantal in stock</h1>

    <!-- Formulier om voorraad bij te werken -->
    <form action="{{ route('update', ['id' => $item->id]) }}" method="PUT">
        @csrf <!-- CSRF-beveiliging -->

        <!-- Invoerveld voor de nieuwe voorraad -->
        <label class="text-xl">Stock:</label><br>
        <input class="border-secondary" type="number" name="stock" value="{{ $item->stock }}"><br><br>

        <!-- Knop om wijzigingen op te slaan -->
        <button class="border p-2 hover:bg-tertiary" type="submit">Save Changes</button>
    </form>
</body>
<!DOCTYPE html>
<html>
<head>
    <title>Items List</title>
    @vite('resources/css/app.css')
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body class="p-6 bg-primary">
    <h1 class="pb-6 text-3xl">Verander het aantal in stock</h1>
    <form class="" action="{{ route('update', ['id' => $item->id]) }}" method="PUT">
        @csrf
        <label class="text-xl">Stock:</label><br>
        <input class="border-secondary" type="number" name="stock" value="{{ $item->stock }}"><br><br>
        <button class="border p-2 hover:bg-tertiary" type="submit">Save Changes</button>
    </form>
</body>

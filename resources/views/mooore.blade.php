<!DOCTYPE html>
<html>
<head>
    <title>Items List</title>
    <!-- Laad de Vite-stijlen in voor de applicatie -->
    @vite('resources/css/app.css')
    <!-- Fallback-stijlen voor als Vite niet beschikbaar is -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body class="bg-primary font-sofia">
    <div class="container min-w-full">
        <table class="border-collapse w-full">
            <!-- Groepeer items op land -->
            @php
                $groupedItems = $items->groupBy('country');
            @endphp
            <tbody>
                <!-- Loop door elk land en de bijbehorende items -->
                @foreach($groupedItems as $country => $countryItems)
                    <tr>
                        <!-- Toon het land voor deze groep items -->
                        <th class="p-6 text-3xl" rowspan="1">{{ $country }}</th>
                    </tr>
                    <!-- Tabelkop voor de items -->
                    <tr class="bg-tertiary">
                        <th class="border p-4">Brand</th>
                        <th>Type</th>
                        <th>Description</th>
                        <th>Stock</th>
                        <th>Location</th>
                        <th></th>
                    </tr>
                    <!-- Eerste item in dit land -->
                    <tr>
                        <!-- Toon eigenschappen van het item -->
                        <td class="border p-2">{{ $countryItems[0]->brand }}</td>
                        <td class="border p-2">{{ $countryItems[0]->type }}</td>
                        <td class="border p-2">{{ $countryItems[0]->description }}</td>
                        <td class="border p-2">{{ $countryItems[0]->stock }}</td>
                        <td class="border p-2">
                            @if ($countryItems[0]->location)
                                {{ $countryItems[0]->location }}
                            @else
                                geen locatie
                            @endif
                        </td>
                        <!-- Koppeling om voorraad te bewerken -->
                        <td class="border p-2"><a href="{{ route('edit', ['id' => $countryItems[0]->id]) }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Edit Stock</a></td>
                    </tr>
                    <!-- Andere items in dit land -->
                    @foreach($countryItems->skip(1) as $item)
                        <tr>
                            <!-- Toon eigenschappen van het item -->
                            <td class="border p-2">{{ $item->brand }}</td>
                            <td class="border p-2">{{ $item->type }}</td>
                            <td class="border p-2">{{ $item->description }}</td>
                            <td class="border p-2">{{ $item->stock }}</td>
                            <td class="border p-2">
                                @if ($item->location)
                                    {{ $item->location }}
                                @else
                                    geen locatie
                                @endif
                            </td>
                            <!-- Koppeling om voorraad te bewerken -->
                            <td class="border p-2"><a href="{{ route('edit', ['id' => $item->id]) }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Edit Stock</a></td>
                        </tr>
                    @endforeach
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>
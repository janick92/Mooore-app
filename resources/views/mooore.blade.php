<!DOCTYPE html>
<html>
<head>
    <title>Items List</title>
    @vite('resources/css/app.css')
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body class="bg-primary font-sofia">
    <div class="container min-w-full">
        <table class="border-collapse w-full"> 
            @php
                $groupedItems = $items->groupBy('country');
            @endphp
            <tbody>
                
                @foreach($groupedItems as $country => $countryItems)
                    <tr>
                        
                        <th class="p-6 text-3xl" rowspan="1">{{ $country }}</th>
                    </tr>
                    <tr class="bg-tertiary">
                        <th class="border p-4">Brand</th>
                        <th>Type</th>
                        <th>Description</th>
                        <th>Stock</th>
                        <th>Location</th>
                        <th></th>
                    </tr>
                    <tr>
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
                        <td class="border p-2"><a href="{{ route('edit', ['id' => $countryItems[0]->id]) }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Edit Stock</a></td>
                    </tr>
                    @foreach($countryItems->skip(1) as $item)
                        <tr>
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
                            <td class="border p-2"><a href="{{ route('edit', ['id' => $item->id]) }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Edit Stock</a></td>
                        </tr>
                    @endforeach
                @endforeach
            </tbody>

        </table>
        

    </div>
</body>
</html>
<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;


class StockSeeder extends Seeder
{
    public function run()
    {
        try {
            // Een HTTP-verzoek sturen naar de gegeven URL
            $response = Http::withOptions([
                'debug' => true,
                'verify' => false,
            ])->get('https://cms.mooore.nl/content/uploads/2022/12/stage-frontend1.json');

            // Controleren of het HTTP-verzoek succesvol was
            if ($response->successful()) {
                $data = $response->json();
                
                // Door de landen en items in de gegevens loopen
                foreach ($data as $country => $items) {
                    foreach ($items as $item) {
                        // Invoegen van gegevens in de 'stock' tabel
                        DB::table('stock')->insert([
                            'country' => $country,
                            'brand' => $item['brand'],
                            'type' => $item['type'],
                            'description' => $item['description'],
                            'stock' => $item['stock'],
                            'location' => $item['location'],
                            'created_at' => now(),
                            'updated_at' => now(),
                        ]);
                    }
                }
            } else {
                 // Melden dat het verzoek niet succesvol was en de statuscode weergeven
                echo "Request was not successful: {$response->status()}";
            }
        } catch (\Exception $e) {
            // Als er een uitzondering optreedt, toon dan een foutmelding met de uitzonderingsboodschap
            echo "An error occurred: {$e->getMessage()}";
        }
    }
}

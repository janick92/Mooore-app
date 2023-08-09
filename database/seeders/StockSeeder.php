<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;


class StockSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $response = Http::withOptions([
            'debug' => true,
            'verify' => false,
        ])->get('https://cms.mooore.nl/content/uploads/2022/12/stage-frontend1.json');

        if ($response->ok()) {
            $data = $response->json();
            
            foreach ($data as $country => $items) {
                foreach ($items as $item) {
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
            echo "It isn't working...";
        }

    }
}

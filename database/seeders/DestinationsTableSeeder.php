<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Destination;

class DestinationsTableSeeder extends Seeder {
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        Destination::insert([
            [
                'name' => 'The Mall Mid Valley SouthKey',
                'img_path' => 'storage/images/destinations/mid-valley-jb.png',
            ],
            [
                'name' => 'New York',
                'img_path' => 'storage/images/destinations/newyork.png',
            ],
            [
                'name' => 'Paris',
                'img_path' => 'storage/images/destinations/paris.png',
            ],
            [
                'name' => 'Santorini',
                'img_path' => 'storage/images/destinations/santorini.png',
            ],
            [
                'name' => 'Saopaulo',
                'img_path' => 'storage/images/destinations/saopaulo.png',
            ],
        ]);
    }
}

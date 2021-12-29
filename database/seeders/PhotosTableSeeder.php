<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Photo;

class PhotosTableSeeder extends Seeder {
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        Photo::insert(
            [
                [
                    'business_id' => 1,
                    'path' => 'storage/images/businesses/photos/al-ikhsan-1.jpg',
                ],
                [
                    'business_id' => 1,
                    'path' => 'storage/images/businesses/photos/al-ikhsan-2.jpg',
                ],
                [
                    'business_id' => 1,
                    'path' => 'storage/images/businesses/photos/al-ikhsan-3.jpg',
                ],
                [
                    'business_id' => 1,
                    'path' => 'storage/images/businesses/photos/al-ikhsan-4.jpg',
                ],
                [
                    'business_id' => 1,
                    'path' => 'storage/images/businesses/photos/al-ikhsan-5.jpg',
                ],
                [
                    'business_id' => 1,
                    'path' => 'storage/images/businesses/photos/al-ikhsan-6.jpg',
                ],
                [
                    'business_id' => 1,
                    'path' => 'storage/images/businesses/photos/al-ikhsan-7.jpg',
                ],
            ]
        );

    }
}

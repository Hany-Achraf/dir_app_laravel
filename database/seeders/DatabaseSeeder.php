<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder {
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run() {
        $this->call(UsersTableSeeder::class);
        $this->call(DestinationsTableSeeder::class);
        $this->call(CategoriesTableSeeder::class);
        $this->call(BusinessesTableSeeder::class);
        $this->call(PhotosTableSeeder::class);
        $this->call(ReviewsTableSeeder::class);
        $this->call(PromotionsTableSeeder::class);
        $this->call(EventsTableSeeder::class);
    }
}

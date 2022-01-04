<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;

class CategoriesTableSeeder extends Seeder {
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        Category::insert([
            [
                'name' => 'Fashion',
                'img_path' => 'storage/images/categories/fashion.png',
            ],
            [
                'name' => 'Food & Beverages',
                'img_path' => 'storage/images/categories/food.png',
            ],
            [
                'name' => 'Cars',
                'img_path' => 'storage/images/categories/car.png',
            ],
            [
                'name' => 'Health',
                'img_path' => 'storage/images/categories/health.png',
            ],
            [
                'name' => 'Hotels',
                'img_path' => 'storage/images/categories/hotel.png',
            ],
            [
                'name' => 'Beauty',
                'img_path' => 'storage/images/categories/beauty.png',
            ],
            [
                'name' => 'Legal Consultation',
                'img_path' => 'storage/images/categories/lawyer.png',
            ],
            [
                'name' => 'Schools',
                'img_path' => 'storage/images/categories/school.png',
            ],
            [
                'name' => 'Sports',
                'img_path' => 'storage/images/categories/sports.png',
            ],
        ]);

        Category::insert([
            [
                'name' => 'All',
                'parent_id' => 1,
            ],
            [
                'name' => 'Men',
                'parent_id' => 1,
            ],
            [
                'name' => 'Women',
                'parent_id' => 1,
            ],
            [
                'name' => 'Sportswear',
                'parent_id' => 1,
            ],
            [
                'name' => 'All',
                'parent_id' => 2,
            ],
            [
                'name' => 'Fast Food',
                'parent_id' => 2,
            ],
            [
                'name' => 'Arabian',
                'parent_id' => 2,
            ],
            [
                'name' => 'Malay',
                'parent_id' => 2,
            ],
            [
                'name' => 'Western',
                'parent_id' => 2,
            ],
            [
                'name' => 'Chinese',
                'parent_id' => 2,
            ],
        ]);
    }
}

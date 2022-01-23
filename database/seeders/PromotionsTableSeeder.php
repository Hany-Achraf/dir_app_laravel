<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Promotion;
use Carbon\Carbon;

class PromotionsTableSeeder extends Seeder {
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        Promotion::insert([
            [
                'name' => 'Pizza Hut Double The Fun On Every Delivery',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
                'img_path' => 'storage/images/promotions/promotion1.jpg',
                'end_date' => Carbon::now(),
                'business_id' => 8,
            ],
            [
                'name' => 'Adidas Malaysia Offer - 30% Off Yeezy Slides & Shoes',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
                'img_path' => 'storage/images/promotions/promotion2.jpg',
                'end_date' => Carbon::now(),
                'business_id' => 2,
            ],
            [
                'name' => 'Vans “Off the Wall” Summer Sale',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
                'img_path' => 'storage/images/promotions/promotion3.jpg',
                'end_date' => Carbon::now(),
                'business_id' => 5,
            ],
            [
                'name' => 'Al-Ikhsan Sports Under Armour Promotion FREE RM50 Cash Voucher (21 December 2020 - 31 January 2021)',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
                'img_path' => 'storage/images/promotions/promotion4.jpg',
                'end_date' => Carbon::now(),
                'business_id' => 1,
            ],
            [
                'name' => 'McDonald’s – 50% OFF GrabFood Newbie Promo',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
                'img_path' => 'storage/images/promotions/promotion5.jpg',
                'end_date' => Carbon::now(),
                'business_id' => 7,
            ],
            [
                'name' => 'Friends & Family Sale – 40% Off Full Price Styles Promo Code + Extra 25% Off Sale (Sept 18-21)',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
                'img_path' => 'storage/images/promotions/promotion6.jpg',
                'end_date' => Carbon::now(),
                'business_id' => 3,
            ],
            [
                'name' => 'Pizza Hut Buy 1 Get 1 FREE Promotion',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
                'img_path' => 'storage/images/promotions/promotion7.jpg',
                'end_date' => Carbon::now(),
                'business_id' => 8,
            ],
            [
                'name' => 'Mcdonald’s launch Early 2021 Promotions of 2 Value Packages for only RM18',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
                'img_path' => 'storage/images/promotions/promotion8.jpg',
                'end_date' => Carbon::now(),
                'business_id' => 7,
            ],
            // [
            //     'name' => 'Starbucks Drink Extra 20% Off April Fools Promo',
            //     'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
            //     'img_path' => 'storage/images/promotions/promotion3.jpg',
            //     'end_date' => Carbon::now(),
            //     'business_id' => 1,
            // ],
        ]);
    }
}

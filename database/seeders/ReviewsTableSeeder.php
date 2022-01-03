<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Review;
use Carbon\Carbon;

class ReviewsTableSeeder extends Seeder {
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        Review::insert(
            [
                [
                    'business_id' => 1,
                    'user_id' => 1,
                    'rate' => 4,
                    'comment' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
                    'created_at' => Carbon::now(),
                ],
                [
                    'business_id' => 1,
                    'user_id' => 2,
                    'rate' => 3,
                    'comment' => 'Very professional!',
                    'created_at' => Carbon::now(),
                ],
                [
                    'business_id' => 1,
                    'user_id' => 3,
                    'rate' => 2,
                    'comment' => 'Flutter is Google’s mobile UI open source framework to build high-quality native (super fast) interfaces for iOS and Android apps with the unified codebase.',
                    'created_at' => Carbon::now(),
                ],
                [
                    'business_id' => 1,
                    'user_id' => 4,
                    'rate' => 5,
                    'comment' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
                    'created_at' => Carbon::now(),
                ],

                [
                    'business_id' => 2,
                    'user_id' => 4,
                    'rate' => 4,
                    'comment' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
                    'created_at' => Carbon::now(),
                ],
                [
                    'business_id' => 2,
                    'user_id' => 3,
                    'rate' => 5,
                    'comment' => 'So delicious!',
                    'created_at' => Carbon::now(),
                ],
                [
                    'business_id' => 2,
                    'user_id' => 1,
                    'rate' => 4,
                    'comment' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
                    'created_at' => Carbon::now(),
                ],
            ]
        );

    }
}

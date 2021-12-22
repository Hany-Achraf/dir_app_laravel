<?php

namespace Database\Seeders;

use App\Models\Event;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class EventsTableSeeder extends Seeder {
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        // $table->string('name');
        // $table->text('description')->nullable();
        // $table->string('organizer');
        // $table->string('img_path');
        // $table->dateTime('date');

        Event::insert([
            [
                'name' => 'SUN LIFE MALAYSIA RESOLUTION RUN 2020',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
                'organizer' => 'Sun Life Malaysia Assurance Bhd',
                'img_path' => 'storage/images/events/event1.jpg',
                'date_time' => Carbon::now(),
            ],
            [
                'name' => 'HOW 2022 BUDGET AFFECT YOUR BUSINESS AND PERSONAL INCOME [FREE ADMISSION]',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
                'organizer' => 'KENT LIEW',
                'img_path' => 'storage/images/events/event2.jpg',
                'date_time' => Carbon::now(),
            ],
            [
                'name' => 'Jelajah Usahawan Digital (BOP)',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
                'organizer' => 'Halo Telco',
                'img_path' => 'storage/images/events/event3.jpg',
                'date_time' => Carbon::now(),
            ],
        ]);
    }
}

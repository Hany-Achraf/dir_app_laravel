<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UsersTableSeeder extends Seeder {
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        User::insert(
            [
                [
                    'firstname' => 'هاني',
                    'lastname' => 'أشرف',
                    'avatar_img_path' => 'storage/images/avatars/hany.jpg',
                    'email' => 'hany@hany.net',
                    'password' => '$2y$10$S0y3QJHF2LsjufVHPptD8O1KrYPxzRy/7wAVEaHlzWO9KpKsijqzW',
                ],
                [
                    'firstname' => 'Omar',
                    'lastname' => 'K. Al Wakeel',
                    'avatar_img_path' => 'storage/images/avatars/omar.jpg',
                    'email' => 'omar@omar.net',
                    'password' => '$2y$10$S0y3QJHF2LsjufVHPptD8O1KrYPxzRy/7wAVEaHlzWO9KpKsijqzW',
                ],
                [
                    'firstname' => '楊',
                    'lastname' => '仁忠',
                    'avatar_img_path' => 'storage/images/avatars/yong.jpg',
                    'email' => 'yong@yong.net',
                    'password' => '$2y$10$S0y3QJHF2LsjufVHPptD8O1KrYPxzRy/7wAVEaHlzWO9KpKsijqzW',
                ],
                [
                    'firstname' => 'Khaled',
                    'lastname' => 'Qabel',
                    // 'avatar_img_path' => 'storage/images/avatars/khaled.jpg',
                    'avatar_img_path' => null,
                    'email' => 'khaled@khaled.net',
                    'password' => '$2y$10$S0y3QJHF2LsjufVHPptD8O1KrYPxzRy/7wAVEaHlzWO9KpKsijqzW',
                ],
            ]
        );
    }
}

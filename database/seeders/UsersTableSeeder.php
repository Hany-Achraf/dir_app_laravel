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
                    'name' => 'هاني أشرف',
                    'avatar_img_path' => 'storage/images/avatars/hany.jpg',
                    'email' => 'hany@hany.net',
                    'password' => '000000',
                ],
                [
                    'name' => 'Omar K. Al Wakeel',
                    'avatar_img_path' => 'storage/images/avatars/omar.jpg',
                    'email' => 'omar@omar.net',
                    'password' => '000000',
                ],
                [
                    'name' => '楊仁忠',
                    'avatar_img_path' => 'storage/images/avatars/yong.jpg',
                    'email' => 'yong@yonh.net',
                    'password' => '000000',
                ],
                [
                    'name' => 'Khaled Qabel',
                    'avatar_img_path' => 'storage/images/avatars/khaled.jpg',
                    'email' => 'khaled@khaled.net',
                    'password' => '000000',
                ],
            ]
        );
    }
}

<?php

namespace Database\Seeders;

use App\Models\AdminUser;
use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        AdminUser::factory(1)->create(
            [
            "name" => "agzam",
            "role" => "admin",
            "email" => "agzam@saidov.com",
            "password" => "12345678",    ]
    );

        User::factory(10)->create();

        Post::factory(10)->create();
    }
}

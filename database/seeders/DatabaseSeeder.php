<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Advert;
use App\Models\Category;
use App\Models\Bidding;
use App\Models\Message;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory(10)->create();
        Advert::factory(10)->create();
        Category::factory(10)->create();
        Bidding::factory(10)->create();
        Message::factory(10)->create();



        $this->call([
            AdvertCategorySeeder::class
        ]);
    }
}

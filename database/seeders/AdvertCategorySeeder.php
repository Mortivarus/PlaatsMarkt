<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Advert;
use App\Models\Category;

class AdvertCategorySeeder extends Seeder
{

    private $items = [];

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        for ($i=0; $i<Advert::count(); $i++){
            $items[] = [
                'advert_id' => rand(1, Advert::count()),
                'category_id' => rand(1, Category::count())
            ];
        }

        foreach($items as $item){
            DB::table('advert_category')->insert($item);
        }



        
    }
}

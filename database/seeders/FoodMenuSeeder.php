<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;


class FoodMenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('food_menus')->insert([
            'name' => Str::random(10),
            'description' => Str::random(10),
            'image_url' => Str::random(10),
            'category'=>Str::random(10),
        ]);
    }
}

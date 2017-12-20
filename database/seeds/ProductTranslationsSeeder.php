<?php

use Illuminate\Database\Seeder;
use App\ProductTranslation;

class ProductTranslationsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('product_translations')->delete();

        $faker = Faker\Factory::create();
        for ($i = 1; $i <= 3; $i++) {
            ProductTranslation::create([
                'product_id' => $i,
                'title' => $faker->city,
                'description' => $faker->realText(),
                'content' => $faker->realText(),
                'locale' => 'en'
            ]);
        }

        $faker = Faker\Factory::create('ru_RU');
        for ($i = 1; $i <= 3; $i++) {
            ProductTranslation::create([
                'product_id' => $i,
                'title' => $faker->city,
                'description' => $faker->realText(),
                'content' => $faker->realText(),
                'locale' => 'ru'
            ]);
        }

        $faker = Faker\Factory::create('uk_UA');
        for ($i = 1; $i <= 3; $i++) {
            ProductTranslation::create([
                'product_id' => $i,
                'title' => $faker->city,
                'description' => $faker->realText(),
                'content' => $faker->realText(),
                'locale' => 'uk'
            ]);
        }
    }
}

<?php

use Illuminate\Database\Seeder;
use App\AttributeTranslation;

class AttributeTranslationsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('attribute_translations')->delete();

        $faker = Faker\Factory::create();
        for($i = 1; $i <= 5; $i++) {
            AttributeTranslation::create([
                'attribute_id' => $i,
                'name' => $faker->name,
                'value' => $faker->country,
                'locale' => 'en'
            ]);
        }

        $faker = Faker\Factory::create('ru_RU');
        for($i = 1; $i <= 5; $i++) {
            AttributeTranslation::create([
                'attribute_id' => $i,
                'name' => $faker->name,
                'value' => $faker->country,
                'locale' => 'ru'
            ]);
        }

        $faker = Faker\Factory::create('uk_UA');
        for($i = 1; $i <= 5; $i++) {
            AttributeTranslation::create([
                'attribute_id' => $i,
                'name' => $faker->name,
                'value' => $faker->country,
                'locale' => 'uk'
            ]);
        }

    }
}

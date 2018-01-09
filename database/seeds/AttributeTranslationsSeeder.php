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


        AttributeTranslation::create([
            'attribute_id' => 1,
            'name' => 'Type of kitchen',
            'value' => 'L-shaped',
            'locale' => 'en'
        ]);
        AttributeTranslation::create([
            'attribute_id' => 1,
            'name' => 'Вид кухни',
            'value' => 'Г - образная',
            'locale' => 'ru'
        ]);
        AttributeTranslation::create([
            'attribute_id' => 1,
            'name' => 'Вид кухні',
            'value' => 'Г - образна',
            'locale' => 'uk'
        ]);
        AttributeTranslation::create([
            'attribute_id' => 2,
            'name' => 'Used fittings',
            'value' => 'BLUM',
            'locale' => 'en'
        ]);
        AttributeTranslation::create([
            'attribute_id' => 2,
            'name' => 'Используемая фурнитура',
            'value' => 'BLUM',
            'locale' => 'ru'
        ]);
        AttributeTranslation::create([
            'attribute_id' => 2,
            'name' => 'Використовувана фурнітура',
            'value' => 'BLUM',
            'locale' => 'uk'
        ]);
        AttributeTranslation::create([
            'attribute_id' => 3,
            'name' => 'Housing material',
            'value' => 'Laminated plywood',
            'locale' => 'en'
        ]);
        AttributeTranslation::create([
            'attribute_id' => 3,
            'name' => 'Материал корпуса',
            'value' => 'Ламинированная фанера',
            'locale' => 'ru'
        ]);
        AttributeTranslation::create([
            'attribute_id' => 3,
            'name' => 'Матеріал корпусу',
            'value' => 'ламінована фанера',
            'locale' => 'uk'
        ]);
        AttributeTranslation::create([
            'attribute_id' => 4,
            'name' => 'Worktop material',
            'value' => 'A natural stone',
            'locale' => 'en'
        ]);
        AttributeTranslation::create([
            'attribute_id' => 4,
            'name' => 'Материал столешницы',
            'value' => 'Натуральный камень',
            'locale' => 'ru'
        ]);
        AttributeTranslation::create([
            'attribute_id' => 4,
            'name' => 'матеріал стільниці',
            'value' => 'Натуральний камінь',
            'locale' => 'uk'
        ]);

/*        $faker = Faker\Factory::create('ru_RU');
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
        }*/

    }
}

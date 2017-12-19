<?php

use Illuminate\Database\Seeder;
use App\MenuTranslation;

class MenuTranslationsSedeer extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('menu_translations')->delete();

        $faker = Faker\Factory::create();
        MenuTranslation::create([
            'menu_id' => 1,
            'title' => 'About us',
            'description' => $faker->realText(),
            'locale' => 'en'
        ]);
        MenuTranslation::create([
            'menu_id' => 2,
            'title' => 'Our works',
            'description' => $faker->realText(),
            'locale' => 'en'
        ]);
        MenuTranslation::create([
            'menu_id' => 3,
            'title' => 'Accessories',
            'description' => $faker->realText(),
            'locale' => 'en'
        ]);
        MenuTranslation::create([
            'menu_id' => 4,
            'title' => 'Contacts',
            'description' => $faker->realText(),
            'locale' => 'en'
        ]);


        for($k = 5; $k <= 8; $k++) {
            MenuTranslation::create([
                'menu_id' => $k,
                'title' => $faker->city,
                'description' => $faker->realText(),
                'text_bottom' => $faker->country,
                'text_top' => $faker->name,
                'locale' => 'en'
            ]);
        }






        $faker = Faker\Factory::create('ru_RU');

        MenuTranslation::create([
            'menu_id' => 1,
            'title' => 'Про нас',
            'description' => $faker->realText(),
            'locale' => 'ru'
        ]);
        MenuTranslation::create([
            'menu_id' => 2,
            'title' => 'Наши работы',
            'description' => $faker->realText(),
            'locale' => 'ru'
        ]);
        MenuTranslation::create([
            'menu_id' => 3,
            'title' => 'Комплектующие',
            'description' => $faker->realText(),
            'locale' => 'ru'
        ]);
        MenuTranslation::create([
            'menu_id' => 4,
            'title' => 'Контакты',
            'description' => $faker->realText(),
            'locale' => 'ru'
        ]);

        for($k = 5; $k <= 8; $k++) {
            MenuTranslation::create([
                'menu_id' => $k,
                'title' => $faker->city,
                'description' => $faker->realText(),
                'text_bottom' => $faker->country,
                'text_top' => $faker->name,
                'locale' => 'ru'
            ]);
        }






        $faker = Faker\Factory::create('uk_UA');

        MenuTranslation::create([
            'menu_id' => 1,
            'title' => 'Про нас',
            'description' => $faker->realText(),
            'locale' => 'uk'
        ]);
        MenuTranslation::create([
            'menu_id' => 2,
            'title' => 'Наші роботи',
            'description' => $faker->realText(),
            'locale' => 'uk'
        ]);
        MenuTranslation::create([
            'menu_id' => 3,
            'title' => 'Комплектуючі',
            'description' => $faker->realText(),
            'locale' => 'uk'
        ]);
        MenuTranslation::create([
            'menu_id' => 4,
            'title' => 'Контакти',
            'description' => $faker->realText(),
            'locale' => 'uk'
        ]);


        for($k = 5; $k <= 8; $k++) {
            MenuTranslation::create([
                'menu_id' => $k,
                'title' => $faker->city,
                'description' => $faker->realText(),
                'text_bottom' => $faker->country,
                'text_top' => $faker->name,
                'locale' => 'uk'
            ]);
        }







/*        for($k = 1; $k <= 8; $k++) {
            MenuTranslation::create([
                'menu_id' => $k,
                'title' => $faker->city,
                'description' => $faker->realText(),
                'text_bottom' => $faker->country,
                'text_top' => $faker->name,
                'locale' => 'en'
            ]);
        }

        $faker = Faker\Factory::create('ru_RU');

        for($k = 1; $k <= 8; $k++) {
            MenuTranslation::create([
                'menu_id' => $k,
                'title' => $faker->city,
                'description' => $faker->realText(),
                'text_bottom' => $faker->country,
                'text_top' => $faker->name,
                'locale' => 'ru'
            ]);
        }*/
    }
}

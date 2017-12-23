<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(MenusSeeder::class);
        $this->call(MenuTranslationsSedeer::class);
        $this->call(ProductSeeder::class);
        $this->call(ProductTranslationsSeeder::class);
        $this->call(AttributesSeeder::class);
        $this->call(AttributeTranslationsSeeder::class);
        $this->call(ImagesSeeder::class);
        $this->call(CustomersSeeder::class);
    }
}

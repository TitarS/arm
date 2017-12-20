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
    }
}

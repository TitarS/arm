<?php

use Illuminate\Database\Seeder;
use App\Image;

class ImagesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('images')->delete();
        $faker = Faker\Factory::create();
        for($i = 1; $i <= 5; $i++) {
            Image::create([
                'product_id' => '1',
                'name' => $faker->imageUrl('760', '400')
            ]);
        }
    }
}

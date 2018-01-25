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
        for($i = 1; $i <= 7; $i++) {
            Image::create([
                'product_id' => '1',
                'name' => 'classic-kitchens/elizabeth/' . $i . '.JPG'
            ]);
        }
        for($i = 1; $i <= 7; $i++) {
            Image::create([
                'product_id' => '2',
                'name' => 'classic-kitchens/claire/' . $i . '.JPG'
            ]);
        }
        for($i = 1; $i <= 7; $i++) {
            Image::create([
                'product_id' => '3',
                'name' => 'modern-kitchens/mircella/' . $i . '.JPG'
            ]);
        }
        for($i = 1; $i <= 7; $i++) {
            Image::create([
                'product_id' => '4',
                'name' => 'modern-kitchens/heidi/' . $i . '.JPG'
            ]);
        }
    }
}

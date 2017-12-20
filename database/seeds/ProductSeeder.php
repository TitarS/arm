<?php

use Illuminate\Database\Seeder;
use App\Product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->delete();
        for ($i = 1; $i <= 3; $i++) {
            Product::create([
                'menu_id' => '5',
                'image_main' => '../../assets/img-temp/740x380/img1.jpg'
            ]);
        }

    }
}

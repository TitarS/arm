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
            Product::create([
                'menu_id' => '5',
                'image_main' => 'classic-kitchens/elizabeth/elizabeth.jpg',
                'video' => 'http://www.youtube.com/embed/Agel6lP6BaM'
            ]);
            Product::create([
                'menu_id' => '5',
                'image_main' => 'classic-kitchens/claire/claire.JPG',
                'link_360' => '/360-tour/Claire',
                'video' => 'http://www.youtube.com/embed/eJ9dJEqmQ5s'
            ]);
            Product::create([
                'menu_id' => '6',
                'image_main' => 'modern-kitchens/mircella/mircella.JPG',
                'video' => 'http://www.youtube.com/embed/COYxcwXotZ8'
            ]);
            Product::create([
                'menu_id' => '6',
                'image_main' => 'modern-kitchens/heidi/heidi.JPG',
                'link_360' => '/360-tour/Heidi',
                'video' => 'http://www.youtube.com/embed/banYhAdIUOk'
            ]);

    }
}

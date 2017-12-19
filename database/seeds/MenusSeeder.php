<?php

use Illuminate\Database\Seeder;
use App\Menu;

class MenusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('menus')->delete();

        Menu::create([
            'id' => 1,
            'slug' => 'about-us',
        ]);
        Menu::create([
            'id' => 2,
            'slug' => 'our-works',
        ]);
        Menu::create([
            'id' => 3,
            'slug' => 'accessories',
        ]);
        Menu::create([
            'id' => 4,
            'slug' => 'contacts',
        ]);


        Menu::create([
            'id' => 5,
            'slug' => 'classic-kitchens',
            'image' => '../../assets/img-temp/425x250/img5.png',
            'parent_id' => 2,
        ]);
        Menu::create([
            'id' => 6,
            'slug' => 'modern-kitchens',
            'image' => '../../assets/img-temp/425x250/img1.png',
            'parent_id' => 2,
        ]);

        for ($i = 7; $i <= 15; $i++) {
            Menu::create([
                'id' => $i,
                'slug' => 'category' . $i,
                'image' => '../../assets/img-temp/425x250/img10.png',
                'parent_id' => 3,
            ]);
        }
    }
}

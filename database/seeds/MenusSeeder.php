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
            'image' => '/images/categories/classic-kitchens.jpg',
            'parent_id' => 2,
        ]);
        Menu::create([
            'id' => 6,
            'slug' => 'modern-kitchens',
            'image' => '/images/categories/modern-kitchens.jpg',
            'parent_id' => 2,
        ]);

        $image = [
            'Drawers.jpg',
            'Cargo.jpg',
            'Trays.jpg',
            'Sinks.jpeg',
            'Lifts.jpg',
            'Backlight.jpg',
            'Cornices.jpg',
            'Decors.jpg',
            'Drying.jpg',
            'Technique.jpeg',
            'Facades.jpeg',
            'Countertops.jpg'
        ];
        $name = [
            'drawers',
            'cargo',
            'trays',
            'sinks',
            'lifts',
            'backlight',
            'cornices',
            'decors',
            'drying',
            'technique',
            'facades',
            'countertops'
        ];
        for ($i = 7; $i <= 18; $i++) {
            Menu::create([
                'id' => $i,
                'slug' => $name[$i - 7],
                'image' => '/images/categories/' . $image[$i - 7],
                'parent_id' => 3,
            ]);
        }
    }
}

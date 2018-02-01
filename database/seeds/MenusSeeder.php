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
            'image' => 'classic-kitchens.jpg',
            'parent_id' => 2,
        ]);
        Menu::create([
            'id' => 6,
            'slug' => 'modern-kitchens',
            'image' => 'modern-kitchens.jpg',
            'parent_id' => 2,
        ]);

        $image = [

            'Lifts.jpg',
            'Drawers.jpg',
            'Cargo.jpg',
            'Drying.jpg',
            'Backlight.jpg',
            'Technique.jpeg',
            'Trays.jpg',
            'Sinks.jpeg',
            'Cornices.jpg',
            'Decors.jpg',
            'Facades.jpeg',
            'Countertops.jpg'
        ];
        $name = [
            'lifts',
            'drawers',
            'cargo',
            'drying',
            'backlight',
            'technique',
            'trays',
            'sinks',
            'cornices',
            'decors',
            'facades',
            'countertops'
        ];
        for ($i = 7; $i <= 18; $i++) {
            Menu::create([
                'id' => $i,
                'slug' => $name[$i - 7],
                'image' => $image[$i - 7],
                'parent_id' => 3,
            ]);
        }
    }
}

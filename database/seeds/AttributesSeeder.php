<?php

use Illuminate\Database\Seeder;
use App\Attribute;

class AttributesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('attributes')->delete();

        for($i = 1; $i <= 4; $i++) {
            Attribute::create([
                'product_id' => '1'
            ]);
        }

    }
}

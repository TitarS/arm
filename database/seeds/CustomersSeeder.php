<?php

use Illuminate\Database\Seeder;
use App\Customer;

class CustomersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('customers')->delete();
        $faker = Faker\Factory::create('ru_RU');

        for($i = 1; $i <= 3; $i++) {
            Customer::create([
                'name' => $faker->name(),
                'contact_number' => $faker->phoneNumber,
                'email' => $faker->unique()->email,
                'message' => $faker->country,
                'mission' => $faker->colorName,
                'image' => $faker->imageUrl(),
                'date' => $faker->date()
            ]);
        }
    }
}

<?php

use Illuminate\Database\Seeder;

class UsersAddressSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->orderBy('id')->chunk(100, function ($users) {
            $faker = Faker\Factory::create();
            foreach ($users as $user) {
                DB::table('user_addresses')->insert([
                        'country' => $faker->country,
                        'postcode' => $faker->postcode,
                        'address' => $faker->address,
                        'created_at' => date('Y-m-d H:i:s'),
                        'updated_at' => date('Y-m-d H:i:s'),
                        'user_id' => $user->id,
                    ]);
            }
        });    
    }
}

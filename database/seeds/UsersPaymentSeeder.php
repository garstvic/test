<?php

use Illuminate\Database\Seeder;

class UsersPaymentSeeder extends Seeder
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
                DB::table('user_payments')->insert([
                    'creditCardType' => $faker->creditCardType,
                    'creditCardNumber' => $faker->creditCardNumber,
                    'creditCardExpirationDate' => $faker->creditCardExpirationDateString,
                    'iban' => $faker->iban(null),
                    'swiftBicNumber' => $faker->swiftBicNumber,
                    'name' => $user->name,
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                    'user_id' => $user->id,
                ]);
            }
        });  
    }
}

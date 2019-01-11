<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UsersTableSeeder::class);
        $this->call(UsersLoyaltySeeder::class);
        $this->call(UsersAddressSeeder::class);
        $this->call(UsersPaymentSeeder::class);
        $this->call(PrizesSeeder::class);
        $this->call(CategoriesSeeder::class);
        $this->call(PrizesCategorySeeder::class);
    }
}

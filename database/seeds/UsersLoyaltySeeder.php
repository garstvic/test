<?php

use Illuminate\Database\Seeder;

class UsersLoyaltySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->orderBy('id')->chunk(100, function ($users) {
            foreach ($users as $user) {
                DB::table('users_loyalty')->insert([
                    'created_at' => date('Y-m-d H:i:s'),
                    'value' => random_int(0, 100000),
                    'updated_at' => date('Y-m-d H:i:s'),
                    'user_id' => $user->id,
                ]);
            }
        });
    }
}

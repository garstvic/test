<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /*
        for ($i = 0; $i < 10; $i = $i + 1) {
            DB::table('users')->insert([
                'name' => 'user'.$i,
                'email' => 'user'.$i.'@mail.com',
                'password' => bcrypt('secret'),
                'remember_token' => str_random(10),
                'created_at' => date('Y-m-d H:i:s')
            ]);
        }
        */
        factory(App\User::class, 50)->create();
            
    }
}

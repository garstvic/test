<?php

use Illuminate\Database\Seeder;

class PrizesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        // add loyalties prizes
        for ($i = 0; $i < 100; $i = $i + 1) {
            DB::table('prizes')->insert([
                'name' => $faker->numberBetween(1000, 100000),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ]);
        } 
        
        // add gifts
        factory(App\Prize::class, 100)->create();
        
        // add money prizes
        for ($i = 0; $i < 100; $i = $i + 1) {
            DB::table('prizes')->insert([
                'name' => $faker->numberBetween(1, 1000),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ]);
        }
    }
}

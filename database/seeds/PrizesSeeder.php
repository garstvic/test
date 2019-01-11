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
        // add gifts
        factory(App\Prize::class, 100)->create();
        
        $faker = Faker\Factory::create();
        
        // add money prizes
        for ($i = 0; $i < 100; $i = $i + 1) {
            DB::table('prizes')->insert([
                'name' => $faker->numberBetween(1, 1000),
            ]);
        }
        
        // add loyalties prizes
        for ($i = 0; $i < 100; $i = $i + 1) {
            DB::table('prizes')->insert([
                'name' => $faker->numberBetween(1000, 100000),
            ]);
        } 
    }
}

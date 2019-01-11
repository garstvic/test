<?php

use Illuminate\Database\Seeder;

class PrizesCategorySeeder extends Seeder
{
    protected $betweenBegin = 0;
    protected $betweenEnd = 100;
    protected $category;
    
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->orderBy('id')->chunk(10, function ($categories) {
            foreach ($categories as $category) {
                $this->category = $category;
                DB::table('prizes')->orderBy('id')->whereBetween('id', [$this->betweenBegin, $this->betweenEnd])->chunk(50, function ($prizes) {
                    foreach ($prizes as $prize) {
                        DB::table('prizes_categories')->insert([
                            'created_at' => date('Y-m-d H:i:s'),
                            'updated_at' => date('Y-m-d H:i:s'),
                            'category_id' => $this->category->id,
                            'prize_id' => $prize->id,
                        ]); 
                    }
                });
                
                $this->betweenBegin = $this->betweenBegin + 100;
                $this->betweenEnd = $this->betweenEnd + 100;
            }    
        });
    }
}
<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Sub_categoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sub_categories')->insert([
            ['label'=>'fauteuil roulant','category_id'=>4],
            ['label'=>'lit','category_id'=>2],
            ['label'=>'lève personne','category_id'=>3],
            ['label'=>'douche','category_id'=>5],
            ['label'=>'J\'utilise mes yeux','category_id'=>1],
            ['label'=>'J\'utilise mes mains','category_id'=>1],
        ]);
    }
}

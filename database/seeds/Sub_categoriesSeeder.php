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
        DB::table('sub-categories')->insert([
            ['label'=>'fauteul roulant','category_id'=>4],
            ['label'=>'lit','category_id'=>2],
            ['label'=>'detecteur de mouvement oculaire','category_id'=>1],
            ['label'=>'lève personne','category_id'=>3],
            ['label'=>'douche','category_id'=>3]
        ]);
    }
}

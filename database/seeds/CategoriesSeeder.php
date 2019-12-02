<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            ['id'=>'1','label'=> 'Communication'],
            ['id'=>'2','label'=>'Couchage/Confort'],
            ['id'=>'3','label'=>'Transferts'],
            ['id'=>'4','label'=>'Déplacement'],
            ['id'=>'5','label'=>'Hygiène']
        ]);
    }
}

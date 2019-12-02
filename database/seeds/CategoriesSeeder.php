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
            ['label'=> 'Communication'],
            ['label'=>'Couchage/Confort'],
            ['label'=>'Transferts'],
            ['label'=>'Déplacement'],
            ['label'=>'Hygiène']
        ]);
    }
}

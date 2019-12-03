<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AssociationsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('associations')->insert([
            ['designation'=>'handiSoutient','description'=>'pret de materiel pour handicaper','referent_name'=>'Doe','referent_forename'=>'John','user_id'=>1]
        ]);
    }
}

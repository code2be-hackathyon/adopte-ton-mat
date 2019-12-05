<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

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
            ['designation' => 'handiSoutien', 'description' => 'prêt de materiels pour personnes a mobilité reduite', 'referent_name' => 'Doe', 'referent_forename' => 'John', 'user_id' => 1],
        ]);

        $faker = Faker\Factory::create('fr_FR');
        for ($i = 2; $i <= 20; $i++) {
            DB::table('associations')->insert([
                ['designation' => $faker->company, 'description' => $faker->paragraph('1'), 'referent_name' => 'Doe', 'referent_forename' => 'John', 'user_id' => $i],
            ]);
        }

//        for($i = 2; $i<=20;$i++){
//            $association = new \App\Association();
//            $association->designation = $faker->company;
//            $association->description = $faker->paragraph;
//            $association->referent_name = $faker->name;
//            $association->referent_forename = $faker->lastName;
//            $association->user_id = $i;
//            $association->save();
//        }
    }
}

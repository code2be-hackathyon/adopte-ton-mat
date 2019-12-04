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
        $i = 0;
        DB::table('associations')->insert([
            ['designation'=>'handiSoutient','description'=>'pret de materiel pour handicaper','referent_name'=>'Doe','referent_forename'=>'John','user_id'=>$i+1],
            ['designation'=>Str::random(5),'description'=>Str::random(16),'referent_name'=>'Doe','referent_forename'=>'John','user_id'=>$i+1],
            ['designation'=>Str::random(5),'description'=>Str::random(16),'referent_name'=>'Doe','referent_forename'=>'John','user_id'=>$i+1],
            ['designation'=>Str::random(5),'description'=>Str::random(16),'referent_name'=>'Doe','referent_forename'=>'John','user_id'=>$i+1],
            ['designation'=>Str::random(5),'description'=>Str::random(16),'referent_name'=>'Doe','referent_forename'=>'John','user_id'=>$i+1],
            ['designation'=>Str::random(5),'description'=>Str::random(16),'referent_name'=>'Doe','referent_forename'=>'John','user_id'=>$i+1],
            ['designation'=>Str::random(5),'description'=>Str::random(16),'referent_name'=>'Doe','referent_forename'=>'John','user_id'=>$i+1],
            ['designation'=>Str::random(5),'description'=>Str::random(16),'referent_name'=>'Doe','referent_forename'=>'John','user_id'=>$i+1],
            ['designation'=>Str::random(5),'description'=>Str::random(16),'referent_name'=>'Doe','referent_forename'=>'John','user_id'=>$i+1],
            ['designation'=>Str::random(5),'description'=>Str::random(16),'referent_name'=>'Doe','referent_forename'=>'John','user_id'=>$i+1],
            ['designation'=>Str::random(5),'description'=>Str::random(16),'referent_name'=>'Doe','referent_forename'=>'John','user_id'=>$i+1],
            ['designation'=>Str::random(5),'description'=>Str::random(16),'referent_name'=>'Doe','referent_forename'=>'John','user_id'=>$i+1],
            ['designation'=>Str::random(5),'description'=>Str::random(16),'referent_name'=>'Doe','referent_forename'=>'John','user_id'=>$i+1],
            ['designation'=>Str::random(5),'description'=>Str::random(16),'referent_name'=>'Doe','referent_forename'=>'John','user_id'=>$i+1],
            ['designation'=>Str::random(5),'description'=>Str::random(16),'referent_name'=>'Doe','referent_forename'=>'John','user_id'=>$i+1],
            ['designation'=>Str::random(5),'description'=>Str::random(16),'referent_name'=>'Doe','referent_forename'=>'John','user_id'=>$i+1],
            ['designation'=>Str::random(5),'description'=>Str::random(16),'referent_name'=>'Doe','referent_forename'=>'John','user_id'=>$i+1],
            ['designation'=>Str::random(5),'description'=>Str::random(16),'referent_name'=>'Doe','referent_forename'=>'John','user_id'=>$i+1],
            ['designation'=>Str::random(5),'description'=>Str::random(16),'referent_name'=>'Doe','referent_forename'=>'John','user_id'=>$i+1],
            ['designation'=>Str::random(5),'description'=>Str::random(16),'referent_name'=>'Doe','referent_forename'=>'John','user_id'=>$i+1],
        ]);
    }
}

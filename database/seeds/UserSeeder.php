<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            ['email'=>'contact@test.fr','password'=>'pwtest','city'=>'La Roche sur Yon','street'=>'Boulevard Louis Blanc','num_street'=>'123','postal_code'=>'85220','remember_token'=>'123456789']

        ]);
    }
}

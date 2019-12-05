<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     * @throws Exception
     */
    public function run()
    {
        DB::table('users')->insert([
            ['email'=>'contact@gmail.com','password'=>'pwtest','city'=>'La Roche sur Yon','street'=>'Boulevard Louis Blanc','num_street'=>'123','postal_code'=>'85000','remember_token'=>random_int(0,200)],


        ]);

        $faker = Faker\Factory::create('fr_FR');
        for ($i = 2; $i <= 21; $i++) {
            DB::table('users')->insert([
                ['email' => $faker->companyEmail, 'password' => 'pwtest', 'city' => 'La Roche sur Yon', 'street' => 'Boulevard Louis Blanc', 'num_street' => '123', 'postal_code' =>  random_int(0,9).random_int(0,9).random_int(0,9).random_int(0,9).'0', 'remember_token' => random_int(0, 200)]
            ]);
        }
    }
}

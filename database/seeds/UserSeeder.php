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
            ['email'=>'contact@test.fr','password'=>'pwtest','city'=>'La Roche sur Yon','street'=>'Boulevard Louis Blanc','num_street'=>'123','postal_code'=>'85220','remember_token'=>random_int(0,200)],
            ['email'=>'contact2@test.fr','password'=>'pwtest','city'=>'La Roche sur Yon','street'=>'Boulevard Louis Blanc','num_street'=>'123','postal_code'=>'85220','remember_token'=>random_int(0,200)],
            ['email'=>'contact3@test.fr','password'=>'pwtest','city'=>'La Roche sur Yon','street'=>'Boulevard Louis Blanc','num_street'=>'123','postal_code'=>'85220','remember_token'=>random_int(0,200)],
            ['email'=>'contact4@test.fr','password'=>'pwtest','city'=>'La Roche sur Yon','street'=>'Boulevard Louis Blanc','num_street'=>'123','postal_code'=>'85220','remember_token'=>random_int(0,200)],
            ['email'=>'contact5@test.fr','password'=>'pwtest','city'=>'La Roche sur Yon','street'=>'Boulevard Louis Blanc','num_street'=>'123','postal_code'=>'85220','remember_token'=>random_int(0,200)],
            ['email'=>'contact6@test.fr','password'=>'pwtest','city'=>'La Roche sur Yon','street'=>'Boulevard Louis Blanc','num_street'=>'123','postal_code'=>'85220','remember_token'=>random_int(0,200)],
            ['email'=>'contact7@test.fr','password'=>'pwtest','city'=>'La Roche sur Yon','street'=>'Boulevard Louis Blanc','num_street'=>'123','postal_code'=>'85220','remember_token'=>random_int(0,200)],
            ['email'=>Str::random(5).'@test.fr','password'=>'pwtest','city'=>'La Roche sur Yon','street'=>'Boulevard Louis Blanc','num_street'=>'123','postal_code'=>'85220','remember_token'=>random_int(0,200)],
            ['email'=>Str::random(5).'@test.fr','password'=>'pwtest','city'=>'La Roche sur Yon','street'=>'Boulevard Louis Blanc','num_street'=>'123','postal_code'=>'85220','remember_token'=>random_int(0,200)],
            ['email'=>Str::random(5).'@test.fr','password'=>'pwtest','city'=>'La Roche sur Yon','street'=>'Boulevard Louis Blanc','num_street'=>'123','postal_code'=>'85220','remember_token'=>random_int(0,200)],
            ['email'=>Str::random(5).'@test.fr','password'=>'pwtest','city'=>'La Roche sur Yon','street'=>'Boulevard Louis Blanc','num_street'=>'123','postal_code'=>'85220','remember_token'=>random_int(0,200)],
            ['email'=>Str::random(5).'@test.fr','password'=>'pwtest','city'=>'La Roche sur Yon','street'=>'Boulevard Louis Blanc','num_street'=>'123','postal_code'=>'85220','remember_token'=>random_int(0,200)],
            ['email'=>Str::random(5).'@test.fr','password'=>'pwtest','city'=>'La Roche sur Yon','street'=>'Boulevard Louis Blanc','num_street'=>'123','postal_code'=>'85220','remember_token'=>random_int(0,200)],
            ['email'=>Str::random(5).'@test.fr','password'=>'pwtest','city'=>'La Roche sur Yon','street'=>'Boulevard Louis Blanc','num_street'=>'123','postal_code'=>'85220','remember_token'=>random_int(0,200)],
            ['email'=>Str::random(5).'@test.fr','password'=>'pwtest','city'=>'La Roche sur Yon','street'=>'Boulevard Louis Blanc','num_street'=>'123','postal_code'=>'85220','remember_token'=>random_int(0,200)],
            ['email'=>Str::random(5).'@test.fr','password'=>'pwtest','city'=>'La Roche sur Yon','street'=>'Boulevard Louis Blanc','num_street'=>'123','postal_code'=>'85220','remember_token'=>random_int(0,200)],
            ['email'=>Str::random(5).'@test.fr','password'=>'pwtest','city'=>'La Roche sur Yon','street'=>'Boulevard Louis Blanc','num_street'=>'123','postal_code'=>'85220','remember_token'=>random_int(0,200)],
            ['email'=>Str::random(5).'@test.fr','password'=>'pwtest','city'=>'La Roche sur Yon','street'=>'Boulevard Louis Blanc','num_street'=>'123','postal_code'=>'85220','remember_token'=>random_int(0,200)],
            ['email'=>Str::random(5).'@test.fr','password'=>'pwtest','city'=>'La Roche sur Yon','street'=>'Boulevard Louis Blanc','num_street'=>'123','postal_code'=>'85220','remember_token'=>random_int(0,200)],
            ['email'=>Str::random(5).'@test.fr','password'=>'pwtest','city'=>'La Roche sur Yon','street'=>'Boulevard Louis Blanc','num_street'=>'123','postal_code'=>'85220','remember_token'=>random_int(0,200)]


        ]);
    }
}

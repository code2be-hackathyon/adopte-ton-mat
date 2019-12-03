<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UserSeeder::class);
        $this->call(Sub_categoriesSeeder::class);
        $this->call(Other_usersSeeder::class);
        $this->call(MaterialsSeeder::class);
        $this->call(CategoriesSeeder::class);
        $this->call(AssociationsSeeder::class);
    }
}

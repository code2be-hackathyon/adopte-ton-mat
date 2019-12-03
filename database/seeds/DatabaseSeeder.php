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
<<<<<<< HEAD
        $this->call(Sub_categoriesSeeder::class);
        $this->call(Other_usersSeeder::class);
        $this->call(MaterialsSeeder::class);
        $this->call(CategoriesSeeder::class);
        $this->call(AssociationsSeeder::class);
=======
        $this->call(AssociationsSeeder::class);
        $this->call(Other_usersSeeder::class);
        $this->call(CategoriesSeeder::class);
        $this->call(Sub_categoriesSeeder::class);
        $this->call(MaterialsSeeder::class);
>>>>>>> f05355a78013e07b601682b2f4798c8d7c21e30f
    }
}

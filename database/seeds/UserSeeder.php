<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /** Felhasználók beszúrása.
         * Azért nem csináltam Faker-rel, hogy ki lehessen nézni innen, hogy
         * milyen adatokkal lehet belépni.
         * 
         * @see https://laraveldaily.com/generating-fake-seeds-data-with-faker-package/
         */
        DB::table('users')->insert([
            'name'      => 'User 1',
            'email'     => 'user.1@arteries.hu',
            'password'  => bcrypt('secret'),
        ]);

        DB::table('users')->insert([
            'name'      => 'User 2',
            'email'     => 'user.2@arteries.hu',
            'password'  => bcrypt('secret'),
        ]);

        
        DB::table('users')->insert([
            'name'      => 'User 3',
            'email'     => 'user.3@arteries.hu',
            'password'  => bcrypt('secret'),
        ]);
    }
}

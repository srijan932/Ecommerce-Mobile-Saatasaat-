<?php

use Illuminate\Database\Seeder;

class IsAdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('users')->insert([
            'name' => 'admin',
            'email' => 'admin@mavorion.com',
            'password' => bcrypt('secret932'),
            'is_Admin'=>1,
            'username'=>'admin',
            'contact'=>'9808123245',
        ]);
   
    }
}

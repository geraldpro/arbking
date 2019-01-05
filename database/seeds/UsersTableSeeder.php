<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
     public function run()
     {
       DB::table('users')->insert(array(

           array(
               'id' => 1,
               'first_name' => 'Abd-afeez',
               'last_name' => 'Abd-hamid',
               'phone_number' => '08167558013',
               'email' => 'dent4real@yahoo.com',
               'password' => Hash::make('oloreofe'),
               'role_id' => 1,
               'confirmed' => 1,
               'account_type_id' => 3,
               'confirmation_code' => 'admin_dent'
              ),
           array(
               'id' => 2,
               'first_name' => 'Frank',
               'last_name' => 'Gerald',
               'phone_number' => '08167558013',
               'email' => 'frankgerald88@gmail.com',
               'password' => Hash::make('gerald3040'),
               'role_id' => 1,
               'confirmed' => 1,
               'account_type_id' => 1,
               'confirmation_code' => 'admin_dent'
              ),
           array(
               'id' => 3,
               'first_name' => 'Ogonna',
               'last_name' => 'Okafor',
               'phone_number' => '08167558013',
               'email' => 'oguguookafor@yahoo.com',
               'password' => Hash::make('ogbaji1984'),
               'role_id' => 1,
               'confirmed' => 1,
               'account_type_id' => 1,
               'confirmation_code' => 'admin_dent'
              )

        //  array(
        //        'id' => 2,
        //        'name' => 'senior traders',
        //       ),
        //  array(
        //        'id' => 3,
        //        'name' => 'junior traders',
        //       ),
        //  array(
        //        'id' => 4,
        //        'name' => 'regular users',
        //       )
         ));
     }

}

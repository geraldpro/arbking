<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(RolesTableSeeder::class);
        $this->call(AccountTypesTableSeeder::class);
        $this->call(UsersTableSeeder::class);
        $this->call(MatchesTableSeeder::class);
        $this->call(BanksTableSeeder::class);
        $this->call(TransactionsTableSeeder::class);
    }
}

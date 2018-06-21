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
        $this->call(UsersTableSeeder::class);
        $this->call(OrganisatiesTableSeeder::class);
        $this->call(LeefgebiedTableSeeder::class);
        $this->call(ThemaTableSeeder::class);
        $this->call(ProblematiekTableSeeder::class);
        $this->call(KoppelThemaLeefTableSeeder::class);
    }
}

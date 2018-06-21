<?php

use Illuminate\Database\Seeder;

class LeefgebiedTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('leefgebied')->insert([
            'leefgebied' => 'Werk & dagbesteding',
        ]);
        DB::table('leefgebied')->insert([
            'leefgebied' => 'Inkomen',
        ]);
        DB::table('leefgebied')->insert([
            'leefgebied' => 'Onderwijs',
        ]);
        DB::table('leefgebied')->insert([
            'leefgebied' => 'Gezondheid',
        ]);
        DB::table('leefgebied')->insert([
            'leefgebied' => 'Sociaal functioneren',
        ]);

    }
}

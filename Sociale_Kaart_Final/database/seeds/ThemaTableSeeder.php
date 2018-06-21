<?php

use Illuminate\Database\Seeder;

class ThemaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('thema')->insert([
            'thema' => 'Begeleiding naar werk',
        ]);
        DB::table('thema')->insert([
            'thema' => 'Schulden',
        ]);
        DB::table('thema')->insert([
            'thema' => 'Begeleiding (naar) onderwijs',
        ]);
        DB::table('thema')->insert([
            'thema' => 'Psychisch',
        ]);
        DB::table('thema')->insert([
            'thema' => 'Gezins & opvoedingsproblematiek',
        ]);
        DB::table('thema')->insert([
            'thema' => 'Dagbesteding',
        ]);
        DB::table('thema')->insert([
            'thema' => 'Uitkering',
        ]);
        DB::table('thema')->insert([
            'thema' => 'Keuze beroep/opleiding',
        ]);
        DB::table('thema')->insert([
            'thema' => 'Lichamelijk',
        ]);
        DB::table('thema')->insert([
            'thema' => 'Financien',
        ]);
        DB::table('thema')->insert([
            'thema' => 'NT2',
        ]);
        DB::table('thema')->insert([
            'thema' => 'Verslaving',
        ]);
        DB::table('thema')->insert([
            'thema' => 'Justitie',
        ]);
        DB::table('thema')->insert([
            'thema' => 'Jonge moeders/vaders',
        ]);
        DB::table('thema')->insert([
            'thema' => 'Vluchtelingen',
        ]);
        DB::table('thema')->insert([
            'thema' => 'Wonen',
        ]);
    }
}

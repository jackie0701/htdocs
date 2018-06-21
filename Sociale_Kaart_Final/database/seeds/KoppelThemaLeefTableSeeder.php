<?php

use Illuminate\Database\Seeder;

class KoppelThemaLeefTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('koppel_thema_leef')->insert([
            'id' => '1',
            'leefgebied_id' => '1',
            'thema_id' => '1'
        ]);


        DB::table('koppel_thema_leef')->insert([
            'id' => '2',
            'leefgebied_id' => '1',
            'thema_id' => '6'
        ]);


        DB::table('koppel_thema_leef')->insert([
            'id' => '3',
            'leefgebied_id' => '2',
            'thema_id' => '2'
        ]);


        DB::table('koppel_thema_leef')->insert([
            'id' => '4',
            'leefgebied_id' => '2',
            'thema_id' => '7'
        ]);


        DB::table('koppel_thema_leef')->insert([
            'id' => '5',
            'leefgebied_id' => '2',
            'thema_id' => '10'
        ]);


        DB::table('koppel_thema_leef')->insert([
            'id' => '6',
            'leefgebied_id' => '3',
            'thema_id' => '3'
        ]);


        DB::table('koppel_thema_leef')->insert([
            'id' => '7',
            'leefgebied_id' => '3',
            'thema_id' => '8'
        ]);


        DB::table('koppel_thema_leef')->insert([
            'id' => '8',
            'leefgebied_id' => '3',
            'thema_id' => '11'
        ]);


        DB::table('koppel_thema_leef')->insert([
            'id' => '9',
            'leefgebied_id' => '4',
            'thema_id' => '4'
        ]);


        DB::table('koppel_thema_leef')->insert([
            'id' => '10',
            'leefgebied_id' => '4',
            'thema_id' => '9'
        ]);


        DB::table('koppel_thema_leef')->insert([
            'id' => '11',
            'leefgebied_id' => '4',
            'thema_id' => '12'
        ]);


        DB::table('koppel_thema_leef')->insert([
            'id' => '12',
            'leefgebied_id' => '5',
            'thema_id' => '5'
        ]);


        DB::table('koppel_thema_leef')->insert([
            'id' => '13',
            'leefgebied_id' => '5',
            'thema_id' => '13'
        ]);


        DB::table('koppel_thema_leef')->insert([
            'id' => '14',
            'leefgebied_id' => '5',
            'thema_id' => '14'
        ]);


        DB::table('koppel_thema_leef')->insert([
            'id' => '15',
            'leefgebied_id' => '5',
            'thema_id' => '15'
        ]);


        DB::table('koppel_thema_leef')->insert([
            'id' => '16',
            'leefgebied_id' => '5',
            'thema_id' => '16'
        ]);
    }
}

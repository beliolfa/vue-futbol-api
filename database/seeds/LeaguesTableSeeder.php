<?php

use Illuminate\Database\Seeder;

class LeaguesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {

        \DB::table('leagues')->delete();

        \DB::table('leagues')->insert(array (
            0 =>
            array (
                'id' => 1,
                'name' => 'Primera',
                'country_id' => 1,
                'playable' => 1,
            ),
            1 =>
            array (
                'id' => 2,
                'name' => 'Segunda',
                'country_id' => 1,
                'playable' => 1,
            ),
            2 =>
            array (
                'id' => 3,
                'name' => 'Segunda grupo I',
                'country_id' => 1,
                'playable' => 1,
            ),
            3 =>
            array (
                'id' => 4,
                'name' => 'Segunda grupo II',
                'country_id' => 1,
                'playable' => 1,
            ),
            4 =>
            array (
                'id' => 5,
                'name' => 'Segunda grupo III',
                'country_id' => 1,
                'playable' => 1,
            ),
            5 =>
            array (
                'id' => 6,
                'name' => 'Segunda grupo IV',
                'country_id' => 1,
                'playable' => 1,
            ),
            6 =>
            array (
                'id' => 7,
                'name' => 'Liga Portugal',
                'country_id' => 2,
                'playable' => 0,
            ),
            7 =>
            array (
                'id' => 8,
                'name' => 'Liga Inglaterra',
                'country_id' => 3,
                'playable' => 0,
            ),
        ));


    }
}

<?php

use Illuminate\Database\Seeder;

class PositionsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {

        \DB::table('positions')->delete();

        \DB::table('positions')->insert(array (
            0 =>
            array (
                'id' => 1,
                'position' => 'POR',
            ),
            1 =>
            array (
                'id' => 2,
                'position' => 'DEF',
            ),
            2 =>
            array (
                'id' => 3,
                'position' => 'MED',
            ),
            3 =>
            array (
                'id' => 4,
                'position' => 'DEL',
            ),
        ));


    }
}

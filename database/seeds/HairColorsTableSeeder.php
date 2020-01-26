<?php

use Illuminate\Database\Seeder;

class HairColorsTableSeeder extends Seeder
{
    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        \DB::table('hair_colors')->delete();

        \DB::table('hair_colors')->insert(array (
            0 =>
            array (
                'id' => 1,
                'color' => 'Rubio',
            ),
            1 =>
            array (
                'id' => 2,
                'color' => 'Sin color',
            ),
            2 =>
            array (
                'id' => 3,
                'color' => 'Moreno',
            ),
            3 =>
            array (
                'id' => 4,
                'color' => 'Canoso',
            ),
            4 =>
            array (
                'id' => 5,
                'color' => 'Pelirojo',
            ),
            5 =>
            array (
                'id' => 6,
                'color' => 'Castaño',
            ),
        ));


    }
}

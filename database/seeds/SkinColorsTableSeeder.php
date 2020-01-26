<?php

use Illuminate\Database\Seeder;

class SkinColorsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {

        \DB::table('skin_colors')->delete();

        \DB::table('skin_colors')->insert(array (
            0 =>
            array (
                'id' => 1,
                'color' => 'Blanco',
            ),
            1 =>
            array (
                'id' => 2,
                'color' => 'Negro',
            ),
            2 =>
            array (
                'id' => 3,
                'color' => 'Mulato',
            ),
            3 =>
            array (
                'id' => 4,
                'color' => 'Oriental',
            ),
        ));


    }
}

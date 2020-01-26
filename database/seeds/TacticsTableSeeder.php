<?php

use Illuminate\Database\Seeder;

class TacticsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {

        \DB::table('tactics')->delete();

        \DB::table('tactics')->insert(array (
            0 =>
            array (
                'id' => 1,
                'name' => '4-4-2',
            ),
            1 =>
            array (
                'id' => 2,
                'name' => '4-3-3',
            ),
            2 =>
            array (
                'id' => 3,
                'name' => '4-5-1',
            ),
            3 =>
            array (
                'id' => 4,
                'name' => '5-4-1',
            ),
            4 =>
            array (
                'id' => 5,
                'name' => '3-5-2',
            ),
            5 =>
            array (
                'id' => 6,
                'name' => '3-4-3',
            ),
        ));


    }
}

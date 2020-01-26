<?php

use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {

        \DB::table('roles')->delete();

        \DB::table('roles')->insert(array (
            0 =>
            array (
                'id' => 1,
                'role' => 'Sin rol',
            ),
            1 =>
            array (
                'id' => 2,
                'role' => 'Portero',
            ),
            2 =>
            array (
                'id' => 3,
                'role' => 'Lateral derecho',
            ),
            3 =>
            array (
                'id' => 4,
                'role' => 'Lateral izquierdo',
            ),
            4 =>
            array (
                'id' => 5,
                'role' => 'Libero',
            ),
            5 =>
            array (
                'id' => 6,
                'role' => 'Central izquierdo',
            ),
            6 =>
            array (
                'id' => 7,
                'role' => 'Central derecho',
            ),
            7 =>
            array (
                'id' => 8,
                'role' => 'Centrocampista derecha',
            ),
            8 =>
            array (
                'id' => 9,
                'role' => 'Interior derecho',
            ),
            9 =>
            array (
                'id' => 10,
                'role' => 'Delantero centro',
            ),
            10 =>
            array (
                'id' => 11,
                'role' => 'Medio centro organizador',
            ),
            11 =>
            array (
                'id' => 12,
                'role' => 'Centrocampista izquierda',
            ),
            12 =>
            array (
                'id' => 13,
                'role' => 'Extremo derecho',
            ),
            13 =>
            array (
                'id' => 14,
                'role' => 'Mediapunta por el centro',
            ),
            14 =>
            array (
                'id' => 15,
                'role' => 'Extremo izquierdo',
            ),
            15 =>
            array (
                'id' => 16,
                'role' => 'Medio centro defensivo',
            ),
            16 =>
            array (
                'id' => 17,
                'role' => 'Media punta derecha',
            ),
            17 =>
            array (
                'id' => 18,
                'role' => 'Media punta izquierda',
            ),
            18 =>
            array (
                'id' => 19,
                'role' => 'Interior izquierdo',
            ),
        ));


    }
}

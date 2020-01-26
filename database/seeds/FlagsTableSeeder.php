<?php

use Illuminate\Database\Seeder;

class FlagsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {

        \DB::table('flags')->delete();

        \DB::table('flags')->insert(array (
            0 =>
            array (
                'id' => 1,
                'flag' => 'Albania',
            ),
            1 =>
            array (
                'id' => 2,
                'flag' => 'Alemania',
            ),
            2 =>
            array (
                'id' => 3,
                'flag' => 'Argentina',
            ),
            3 =>
            array (
                'id' => 4,
                'flag' => 'Australia',
            ),
            4 =>
            array (
                'id' => 5,
                'flag' => 'Austria',
            ),
            5 =>
            array (
                'id' => 6,
                'flag' => 'Azerbaiyán',
            ),
            6 =>
            array (
                'id' => 7,
                'flag' => 'Bielorusia',
            ),
            7 =>
            array (
                'id' => 8,
                'flag' => 'Bolivia',
            ),
            8 =>
            array (
                'id' => 9,
                'flag' => 'Bosnia',
            ),
            9 =>
            array (
                'id' => 10,
                'flag' => 'Brasil',
            ),
            10 =>
            array (
                'id' => 11,
                'flag' => 'Bulgaria',
            ),
            11 =>
            array (
                'id' => 12,
                'flag' => 'Bélgica',
            ),
            12 =>
            array (
                'id' => 13,
                'flag' => 'Camerún',
            ),
            13 =>
            array (
                'id' => 14,
                'flag' => 'Chile',
            ),
            14 =>
            array (
                'id' => 15,
                'flag' => 'Chipre',
            ),
            15 =>
            array (
                'id' => 16,
                'flag' => 'Colombia',
            ),
            16 =>
            array (
                'id' => 17,
                'flag' => 'Croacia',
            ),
            17 =>
            array (
                'id' => 18,
                'flag' => 'Dinamarca',
            ),
            18 =>
            array (
                'id' => 19,
                'flag' => 'Escocia',
            ),
            19 =>
            array (
                'id' => 20,
                'flag' => 'Eslovaquia',
            ),
            20 =>
            array (
                'id' => 21,
                'flag' => 'Eslovenia',
            ),
            21 =>
            array (
                'id' => 22,
                'flag' => 'España',
            ),
            22 =>
            array (
                'id' => 23,
                'flag' => 'Finlandia',
            ),
            23 =>
            array (
                'id' => 24,
                'flag' => 'Francia',
            ),
            24 =>
            array (
                'id' => 25,
                'flag' => 'Ghana',
            ),
            25 =>
            array (
                'id' => 26,
                'flag' => 'Grecia',
            ),
            26 =>
            array (
                'id' => 27,
                'flag' => 'Holanda',
            ),
            27 =>
            array (
                'id' => 28,
                'flag' => 'Honduras',
            ),
            28 =>
            array (
                'id' => 29,
                'flag' => 'Hungría',
            ),
            29 =>
            array (
                'id' => 30,
                'flag' => 'Inglaterra',
            ),
            30 =>
            array (
                'id' => 31,
                'flag' => 'Irlanda',
            ),
            31 =>
            array (
                'id' => 32,
                'flag' => 'Irlanda del Norte',
            ),
            32 =>
            array (
                'id' => 33,
                'flag' => 'Islandia',
            ),
            33 =>
            array (
                'id' => 34,
                'flag' => 'Islas Feroe',
            ),
            34 =>
            array (
                'id' => 35,
                'flag' => 'Israel',
            ),
            35 =>
            array (
                'id' => 36,
                'flag' => 'Italia',
            ),
            36 =>
            array (
                'id' => 37,
                'flag' => 'Lituania',
            ),
            37 =>
            array (
                'id' => 38,
                'flag' => 'Luxemburgo',
            ),
            38 =>
            array (
                'id' => 39,
                'flag' => 'Macedonia',
            ),
            39 =>
            array (
                'id' => 40,
                'flag' => 'Malta',
            ),
            40 =>
            array (
                'id' => 41,
                'flag' => 'Marruecos',
            ),
            41 =>
            array (
                'id' => 42,
                'flag' => 'Moldavia',
            ),
            42 =>
            array (
                'id' => 43,
                'flag' => 'Nigeria',
            ),
            43 =>
            array (
                'id' => 44,
                'flag' => 'Noruega',
            ),
            44 =>
            array (
                'id' => 45,
                'flag' => 'País de Gales',
            ),
            45 =>
            array (
                'id' => 46,
                'flag' => 'Polonia',
            ),
            46 =>
            array (
                'id' => 47,
                'flag' => 'Portugal',
            ),
            47 =>
            array (
                'id' => 48,
                'flag' => 'Rep. Checa',
            ),
            48 =>
            array (
                'id' => 49,
                'flag' => 'Rumania',
            ),
            49 =>
            array (
                'id' => 50,
                'flag' => 'Rusia',
            ),
            50 =>
            array (
                'id' => 51,
                'flag' => 'Serbia',
            ),
            51 =>
            array (
                'id' => 52,
                'flag' => 'Sudáfrica',
            ),
            52 =>
            array (
                'id' => 53,
                'flag' => 'Suecia',
            ),
            53 =>
            array (
                'id' => 54,
                'flag' => 'Suiza',
            ),
            54 =>
            array (
                'id' => 55,
                'flag' => 'Turquía',
            ),
            55 =>
            array (
                'id' => 56,
                'flag' => 'Ucrania',
            ),
            56 =>
            array (
                'id' => 57,
                'flag' => 'Uruguay',
            ),
            57 =>
            array (
                'id' => 58,
                'flag' => 'Yugoslavia',
            ),
            58 =>
            array (
                'id' => 59,
                'flag' => 'Perú',
            ),
            59 =>
            array (
                'id' => 60,
                'flag' => 'Canadá',
            ),
            60 =>
            array (
                'id' => 61,
                'flag' => 'Usa',
            ),
            61 =>
            array (
                'id' => 62,
                'flag' => 'Georgia',
            ),
            62 =>
            array (
                'id' => 63,
                'flag' => 'Costa Rica',
            ),
            63 =>
            array (
                'id' => 64,
                'flag' => 'Paraguay',
            ),
            64 =>
            array (
                'id' => 65,
                'flag' => 'Japón',
            ),
            65 =>
            array (
                'id' => 66,
                'flag' => 'Argelia',
            ),
            66 =>
            array (
                'id' => 67,
                'flag' => 'Trinidad Y Tobago',
            ),
            67 =>
            array (
                'id' => 68,
                'flag' => 'Senegal',
            ),
            68 =>
            array (
                'id' => 69,
                'flag' => 'Surinam',
            ),
            69 =>
            array (
                'id' => 70,
                'flag' => 'Zambia',
            ),
            70 =>
            array (
                'id' => 71,
                'flag' => 'Cabo Verde',
            ),
            71 =>
            array (
                'id' => 72,
                'flag' => 'Venezuela',
            ),
            72 =>
            array (
                'id' => 73,
                'flag' => 'Rodesia',
            ),
            73 =>
            array (
                'id' => 74,
                'flag' => 'Singapur',
            ),
            74 =>
            array (
                'id' => 75,
                'flag' => 'Andorra',
            ),
            75 =>
            array (
                'id' => 76,
                'flag' => 'Mozambique',
            ),
            76 =>
            array (
                'id' => 77,
                'flag' => 'Liechtenstein',
            ),
            77 =>
            array (
                'id' => 78,
                'flag' => 'Liberia',
            ),
            78 =>
            array (
                'id' => 79,
                'flag' => 'Panamá',
            ),
            79 =>
            array (
                'id' => 80,
                'flag' => 'Zaire',
            ),
            80 =>
            array (
                'id' => 81,
                'flag' => 'Tadzhikistán',
            ),
            81 =>
            array (
                'id' => 82,
                'flag' => 'Uzbekistán',
            ),
            82 =>
            array (
                'id' => 83,
                'flag' => 'México',
            ),
            83 =>
            array (
                'id' => 84,
                'flag' => 'Guinea',
            ),
            84 =>
            array (
                'id' => 85,
                'flag' => 'Angola',
            ),
            85 =>
            array (
                'id' => 86,
                'flag' => 'Zimbabwe',
            ),
            86 =>
            array (
                'id' => 87,
                'flag' => 'Sierra Leona',
            ),
            87 =>
            array (
                'id' => 88,
                'flag' => 'Guadalupe',
            ),
            88 =>
            array (
                'id' => 89,
                'flag' => 'Ecuador',
            ),
            89 =>
            array (
                'id' => 90,
                'flag' => 'Estonia',
            ),
            90 =>
            array (
                'id' => 91,
                'flag' => 'Guinea Bissau',
            ),
            91 =>
            array (
                'id' => 92,
                'flag' => 'Libia',
            ),
            92 =>
            array (
                'id' => 93,
                'flag' => 'Egipto',
            ),
            93 =>
            array (
                'id' => 94,
                'flag' => 'Jamaica',
            ),
            94 =>
            array (
                'id' => 95,
                'flag' => 'Nueva Caledonia',
            ),
            95 =>
            array (
                'id' => 96,
                'flag' => 'Bermudas',
            ),
            96 =>
            array (
                'id' => 97,
                'flag' => 'Nueva Zelanda',
            ),
            97 =>
            array (
                'id' => 98,
                'flag' => 'Guayana France',
            ),
            98 =>
            array (
                'id' => 99,
                'flag' => 'San Vicente',
            ),
            99 =>
            array (
                'id' => 100,
                'flag' => 'Chad',
            ),
            100 =>
            array (
                'id' => 101,
                'flag' => 'Togo',
            ),
            101 =>
            array (
                'id' => 102,
                'flag' => 'Guinea Conakry',
            ),
            102 =>
            array (
                'id' => 103,
                'flag' => 'Tanzania',
            ),
            103 =>
            array (
                'id' => 104,
                'flag' => 'Burkina Faso',
            ),
            104 =>
            array (
                'id' => 105,
                'flag' => 'Gambia',
            ),
            105 =>
            array (
                'id' => 106,
                'flag' => 'Ruanda',
            ),
            106 =>
            array (
                'id' => 107,
                'flag' => 'Kenia',
            ),
            107 =>
            array (
                'id' => 108,
                'flag' => 'Mauritania',
            ),
            108 =>
            array (
                'id' => 109,
                'flag' => 'Mali',
            ),
            109 =>
            array (
                'id' => 110,
                'flag' => 'Uganda',
            ),
            110 =>
            array (
                'id' => 111,
                'flag' => 'Congo',
            ),
            111 =>
            array (
                'id' => 112,
                'flag' => 'Letonia',
            ),
            112 =>
            array (
                'id' => 113,
                'flag' => 'Costa de Marfil',
            ),
            113 =>
            array (
                'id' => 114,
                'flag' => 'Armenia',
            ),
            114 =>
            array (
                'id' => 115,
                'flag' => 'Nicaragua',
            ),
            115 =>
            array (
                'id' => 116,
                'flag' => 'Cataluña',
            ),
            116 =>
            array (
                'id' => 117,
                'flag' => 'Níger',
            ),
        ));
    }
}

<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->call(BanderasTableSeeder::class);
        $this->call(ColoresPeloTableSeeder::class);
        $this->call(ColoresPielTableSeeder::class);
        $this->call(DemarcacionesTableSeeder::class);
        $this->call(LigasTableSeeder::class);
        $this->call(PaisesTableSeeder::class);
        $this->call(RolesTableSeeder::class);
        $this->call(TacticasTableSeeder::class);
        $this->call(EquiposTableSeeder::class);
        $this->call(JugadoresTableSeeder::class);
    }
}

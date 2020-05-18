<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class statesSeeders extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $data = [
            [ 's_descripcion' => 'ACTIVO' ],
            [ 's_descripcion' => 'INACTIVO' ]
            
        ];

        DB::table('states')->insert($data);
    }
}

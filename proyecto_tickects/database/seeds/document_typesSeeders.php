<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class document_typesSeeders extends Seeder
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
            [
                'dt_description' => 'DNI',
                'id_states' => 1
            ],
            [
                'dt_description' => 'RUC',
                'id_states' => 1
            ]
            ,
            [
                'dt_description' => 'CARNET DE EXTRANJERIA',
                'id_states' => 1
            ]
        ];
        DB::statement('SET FOREIGN_KEY_CHECKS = 0;');
        DB::table('document_types')->insert($data);
        
    }
}

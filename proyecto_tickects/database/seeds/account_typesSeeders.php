<?php

use Illuminate\Database\Seeder;
use \Illuminate\Support\Facades\DB;

class account_typesSeeders extends Seeder
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
            [ 'at_description' => 'ADMINISTRADOR',
              'id_states' => 1 
            ],
            [ 'at_description' => 'USUARIO',
              'id_states' => 1 
            ]
            
        ];
        
        DB::statement('SET FOREIGN_KEY_CHECKS = 0;');
        
        DB::table('account_types')->insert($data);
    }
}

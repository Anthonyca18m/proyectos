<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class personsSeeders extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [ 'p_name' => 'Max Anthony' ],
            [ 'p_paterno' => 'Cachi' ],
            [ 'p_materno' => 'Ayala' ],
            [ 'p_document' => '12345678' ],
            [ 'p_date_birth' =>  '2020-01-03'],
            [ 'p_gender' =>  'M'],
            [ 'p_age' =>  21],
            [ 'id_document_types' =>  1],
            [ 'id_contacts' =>  1],
            [ 'id_account' =>  1],
            [ 'id_states' =>  1],
            [ 'fec_register' =>  '2020-05-18 21:30:35'],
            [ 'user_register' =>  'admin']
            
        ];

        DB::table('persons')->insert($data);
    }
}
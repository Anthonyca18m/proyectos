<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class countriesSeeders extends Seeder
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
                'id_countries'=> '01',
                'c_name' => 'PERÚ' 
            ]            
        ];

        DB::table('countries')->insert($data);
        
    }
}

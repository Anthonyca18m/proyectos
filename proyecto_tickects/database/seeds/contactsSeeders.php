<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class contactsSeeders extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        //
        $data = [
            [ 'c_telephone' => '987654321' ],
            [ 'c_phone' => '654321' ],
            [ 'c_mail' => 'admin@gmail.com' ],
            [ 'c_photo' => 'profile.png' ],
            [ 'c_address' => 'Jr las calles las calles 111' ],
            [ 'c_marital_status' => 'S' ],
            [ 'id_districts' => '010102' ],
            
        ];

        DB::table('contacts')->insert($data);
    }
}
<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class departmentsSeeders extends Seeder
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
                'id_departments'=> '01',
                'd_name' => 'Amazonas',
                'id_countries' => '01'
            ],
            [ 
                'id_departments'=> '02',
                'd_name' => 'Áncash',
                'id_countries' => '01'
            ],
            [ 
                'id_departments'=> '03',
                'd_name' => 'Apurímac',
                'id_countries' => '01'
            ],
            [ 
                'id_departments'=> '04',
                'd_name' => 'Arequipa',
                'id_countries' => '01'
            ],
            [ 
                'id_departments'=> '05',
                'd_name' => 'Ayacucho',
                'id_countries' => '01'
            ],
            [ 
                'id_departments'=> '06',
                'd_name' => 'Cajamarca',
                'id_countries' => '01'
            ],
            [ 
                'id_departments'=> '07',
                'd_name' => 'Callao',
                'id_countries' => '01'
            ],
            [ 
                'id_departments'=> '08',
                'd_name' => 'Cusco',
                'id_countries' => '01'
            ],
            [ 
                'id_departments'=> '09',
                'd_name' => 'Huancavelica',
                'id_countries' => '01'
            ],
            [ 
                'id_departments'=> '10',
                'd_name' => 'Huánuco',
                'id_countries' => '01'
            ],
            [ 
                'id_departments'=> '11',
                'd_name' => 'Ica',
                'id_countries' => '01'
            ],
            [ 
                'id_departments'=> '12',
                'd_name' => 'Junín',
                'id_countries' => '01'
            ],
            [ 
                'id_departments'=> '13',
                'd_name' => 'La Libertad',
                'id_countries' => '01'
            ],
            [ 
                'id_departments'=> '14',
                'd_name' => 'Lambayeque',
                'id_countries' => '01'
            ],
            [ 
                'id_departments'=> '15',
                'd_name' => 'Lima',
                'id_countries' => '01'
            ],
            [ 
                'id_departments'=> '16',
                'd_name' => 'Loreto',
                'id_countries' => '01'
            ],
            [ 
                'id_departments'=> '17',
                'd_name' => 'Madre de Dios',
                'id_countries' => '01'
            ],
            [ 
                'id_departments'=> '18',
                'd_name' => 'Moquegua',
                'id_countries' => '01'
            ],
            [ 
                'id_departments'=> '19',
                'd_name' => 'Pasco',
                'id_countries' => '01'
            ],
            [ 
                'id_departments'=> '20',
                'd_name' => 'Piura',
                'id_countries' => '01'
            ],
            [ 
                'id_departments'=> '21',
                'd_name' => 'Puno',
                'id_countries' => '01'
            ],
            [ 
                'id_departments'=> '22',
                'd_name' => 'San Martín',
                'id_countries' => '01'
            ],
            [ 
                'id_departments'=> '23',
                'd_name' => 'Tacna',
                'id_countries' => '01'
            ],
            [ 
                'id_departments'=> '24',
                'd_name' => 'Tumbes',
                'id_countries' => '01'
            ],
            [ 
                'id_departments'=> '25',
                'd_name' => 'Ucayali',
                'id_countries' => '01'
            ]
                       
        ];

        DB::statement('SET FOREIGN_KEY_CHECKS = 0;');

        DB::table('departments')->insert($data);
        
    }
}

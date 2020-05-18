<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class apiSeeders extends Seeder
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
                'id' => 1,
                'client_id' => 1,
                'created_at' => '2020-05-18 21:30:35',
                'updated_at' => '2020-05-18 21:30:35'
            ]
        ];
        DB::statement('SET FOREIGN_KEY_CHECKS = 0;');
        DB::table('oauth_personal_access_clients')->insert($data);

        $data2 = [
            [
                'id' => 1,
                'user_id' => NULL,
                'name' => 'laravel_tickects Personal Access Client',
                'secret' => 'Ji4Pa9piTjAj7tpnJYzhXdOghhMAON0HYLcoV2nR',
                'provider' => NULL,
                'redirect' => 'http://localhost',
                'personal_access_client' => 1,
                'password_client' => 0,
                'revoked' => 0,
                'created_at' => '2020-05-18 21:30:35',
                'updated_at' => '2020-05-18 21:30:35'
            ],
            [
                'id' => 2,
                'user_id' => NULL,
                'name' => 'laravel_tickects Password Grant Client',
                'secret' => 'XyUdYVVsMpNA9qpPvzUYFRTJpygJXePrB8vS6UEn',
                'provider' => 'users',
                'redirect' => 'http://localhost',
                'personal_access_client' => 0,
                'password_client' => 1,
                'revoked' => 0,
                'created_at' => '2020-05-18 21:30:35',
                'updated_at' => '2020-05-18 21:30:35'
            ]
        ];
        DB::statement('SET FOREIGN_KEY_CHECKS = 0;');
        DB::table('oauth_clients')->insert($data2);
    }
}
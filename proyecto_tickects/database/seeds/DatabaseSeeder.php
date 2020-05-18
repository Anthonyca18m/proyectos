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
        $this->call([
            statesSeeders::class,
            account_typesSeeders::class,
            countriesSeeders::class,
            departmentsSeeders::class,
            provincesSeeders::class,
            districtsSeeders::class,
            document_typesSeeders::class,
            apiSeeders::class,
            // usersSeeders::class,
            // contactsSeeders::class,
            // personsSeeders::class,
        ]);        
    }
}
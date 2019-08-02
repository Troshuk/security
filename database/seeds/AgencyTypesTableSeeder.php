<?php

use Illuminate\Database\Seeder;

class AgencyTypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('agency_types')->insert([
            [
                'key' => 'P',
                'name' => 'Police',
            ],
            [
                'key' => 'F',
                'name' => 'Fire',
            ],
            [
                'key' => 'M',
                'name' => 'Medical',
            ],
        ]);
    }
}

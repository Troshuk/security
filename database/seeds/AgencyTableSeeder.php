<?php

use Illuminate\Database\Seeder;

class AgencyTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('agencies')->insert([
            [
                'type_key' => 'P',
                'name' => 'ATKINSON EMS',
                'phone' => '6033625536',
                'zip_code' => '11111',
                'city_name' => 'BARCELONETA',
            ],
            [
                'type_key' => 'F',
                'name' => 'ATKINSON EMS',
                'phone' => '6033625536',
                'zip_code' => '11111',
                'city_name' => 'BARCELONETA',
            ],
            [
                'type_key' => 'M',
                'name' => 'ATKINSON EMS',
                'phone' => '6033625536',
                'zip_code' => '11111',
                'city_name' => 'BARCELONETA',
            ],
            [
                'type_key' => 'P',
                'name' => 'ANASCO DISPATCH',
                'phone' => '7033625536',
                'zip_code' => '22222',
                'city_name' => 'ARECIBO',
            ],
            [
                'type_key' => 'F',
                'name' => 'ANASCO DISPATCH',
                'phone' => '7033625536',
                'zip_code' => '22222',
                'city_name' => 'ARECIBO',
            ],
            [
                'type_key' => 'M',
                'name' => 'ANASCO DISPATCH',
                'phone' => '7033625536',
                'zip_code' => '22222',
                'city_name' => 'ARECIBO',
            ],
            [
                'type_key' => 'P',
                'name' => 'CABO ROJO PD',
                'phone' => '8033625536',
                'zip_code' => '33333',
                'city_name' => 'CABO ROJO',
            ],
            [
                'type_key' => 'F',
                'name' => 'CABO ROJO PD',
                'phone' => '8033625536',
                'zip_code' => '33333',
                'city_name' => 'CABO ROJO',
            ],
            [
                'type_key' => 'M',
                'name' => 'CABO ROJO PD',
                'phone' => '8033625536',
                'zip_code' => '33333',
                'city_name' => 'CABO ROJO',
            ],
            [
                'type_key' => 'P',
                'name' => 'UTUADO PR DISPATCH',
                'phone' => '9033625536',
                'zip_code' => '44444',
                'city_name' => 'PENUELAS',
            ],
            [
                'type_key' => 'F',
                'name' => 'UTUADO PR DISPATCH',
                'phone' => '9033625536',
                'zip_code' => '44444',
                'city_name' => 'PENUELAS',
            ],
            [
                'type_key' => 'M',
                'name' => 'UTUADO PR DISPATCH',
                'phone' => '9033625536',
                'zip_code' => '44444',
                'city_name' => 'PENUELAS',
            ],
            [
                'type_key' => 'P',
                'name' => 'ISABELLA PR PD',
                'phone' => '1033625536',
                'zip_code' => '55555',
                'city_name' => 'ISABELLA',
            ],
            [
                'type_key' => 'F',
                'name' => 'ISABELLA PR PD',
                'phone' => '1033625536',
                'zip_code' => '55555',
                'city_name' => 'ISABELLA',
            ],
            [
                'type_key' => 'M',
                'name' => 'ISABELLA PR PD',
                'phone' => '1033625536',
                'zip_code' => '55555',
                'city_name' => 'ISABELLA',
            ],
        ]);
    }
}

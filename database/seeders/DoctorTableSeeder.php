<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class DoctorTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('doctors')->insert([
            [
            'name' => 'Fels Melissande',
            'speciality_id' => 1,
            'city' => 'Noumea',
            'address' => '48 rue Leforest',
            'phone'=> '12-35-84'     
            ],
            [
            'name' => 'Sue Michelle',
            'speciality_id' => 2,
            'city' => 'Magenta',
            'address' => '81 rue Gallieni',
            'phone'=> '54-65-85'
            ],
            [
            'name' => 'Masso Jean',
            'speciality_id' => 3,
            'city' => 'Kone',
            'address' => '23 rue des boutons',
            'phone'=> '85-52-25'
            ],
        ],
    );
    }
}

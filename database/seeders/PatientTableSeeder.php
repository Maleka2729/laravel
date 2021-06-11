<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class PatientTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('patients')->insert([
            [
                'first_name' => 'Kendrick',
                'last_name' => 'FRANCINE',
                'email' => 'k.francine@gmail.com'
            ],
            [
                'first_name' => 'Benjamin',
                'last_name' => 'DESGRIPPES',
                'email' => 'b.desgrippes@gmail.com'
            ],
            [
                'first_name' => 'Fabrice',
                'last_name' => 'DUJARDIN',
                'email' => 'f.dujardin@gmail.com'
            ],
        ],
    );
    }
}

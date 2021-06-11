<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

use Illuminate\Database\Seeder;

class SpecialityTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('specialities')->insert([
            [
            'name' => 'Chirurgie'
            ],
            [
            'name' => 'Psycologue'
            ],
            [
            'name' => 'Podologue'
            ],
        ],
    );
    }
}

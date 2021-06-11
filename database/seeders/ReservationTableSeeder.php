<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ReservationTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('reservations')->insert([
            [
            'starting_at' => '2021-06-14',
            'doctor_id' => 1,
            'patient_id' => 1
            ],
            [
            'starting_at' => '2021-06-20',
            'doctor_id' => 2,
            'patient_id' => 2
            ],
            [
            'starting_at' => '2021-06-25',
            'doctor_id' => 3,
            'patient_id' => 3
            ],
        ],
        );
    }
}

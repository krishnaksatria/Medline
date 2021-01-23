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
        $this->call(HospitalSeeder::class);
        $this->call(MedicineSeeder::class);
        $this->call(DoctorSeeder::class);
    }
}

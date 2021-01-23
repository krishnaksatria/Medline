<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DoctorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('doctors')->insert([
            ['hospital_id'=>'1', 'specialist'=>'Umum', 'name'=>'Gunawan', 'age'=>'45', 'gender'=>'Male', 'rating'=> 3, 'fee'=> 50000],
            ['hospital_id'=>'1', 'specialist'=>'Kandungan dan Ginekologi', 'name'=>'Jacelyn', 'age'=>'40', 'gender'=>'Female', 'rating'=> 3, 'fee'=> 50000],
            ['hospital_id'=>'2', 'specialist'=>'Umum', 'name'=>'Jasson', 'age'=>'35', 'gender'=>'Male', 'rating'=> 4, 'fee'=> 50000],
            ['hospital_id'=>'3', 'specialist'=>'Saraf', 'name'=>'Darryl', 'age'=>'32', 'gender'=>'Male', 'rating'=> 4, 'fee'=> 50000],
            ['hospital_id'=>'4', 'specialist'=>'Umum', 'name'=>'Winardy', 'age'=>'43', 'gender'=>'Male', 'rating'=> 3, 'fee'=> 50000],
            ['hospital_id'=>'4', 'specialist'=>'Umum', 'name'=>'Joko', 'age'=>'47', 'gender'=>'Male', 'rating'=> 4, 'fee'=> 50000],
            ['hospital_id'=>'5', 'specialist'=>'Anak', 'name'=>'Putra', 'age'=>'50', 'gender'=>'Male', 'rating'=> 3, 'fee'=> 50000],
            ['hospital_id'=>'6', 'specialist'=>'Penyakit Dalam', 'name'=>'Nissa', 'age'=>'38', 'gender'=>'Female', 'rating'=> 4, 'fee'=> 50000],
            ['hospital_id'=>'7', 'specialist'=>'Penyakit Dalam', 'name'=>'Supripto', 'age'=>'42', 'gender'=>'Male', 'rating'=> 5, 'fee'=> 50000],
            ['hospital_id'=>'7', 'specialist'=>'Bedah', 'name'=>'Jonathan', 'age'=>'30', 'gender'=>'Male', 'rating'=> 3, 'fee'=> 50000],
            ['hospital_id'=>'7', 'specialist'=>'Umum', 'name'=>'Edi', 'age'=>'32', 'gender'=>'Male', 'rating'=> 3, 'fee'=> 50000],
            ['hospital_id'=>'8', 'specialist'=>'Anak', 'name'=>'Yohanes', 'age'=>'43', 'gender'=>'Male', 'rating'=> 3, 'fee'=> 50000],
            ['hospital_id'=>'9', 'specialist'=>'Kulit dan Kelamin', 'name'=>'Remon', 'age'=>'44', 'gender'=>'Male', 'rating'=> 5, 'fee'=> 50000],
            ['hospital_id'=>'10', 'specialist'=>'Kulit dan Kelamin', 'name'=>'Regina', 'age'=>'48', 'gender'=>'Female', 'rating'=> 4, 'fee'=> 50000],
            ['hospital_id'=>'11', 'specialist'=>'Anak', 'name'=>'Clarissa', 'age'=>'35', 'gender'=>'Female', 'rating'=> 5, 'fee'=> 50000],
            ['hospital_id'=>'12', 'specialist'=>'Kulit dan Kelamin', 'name'=>'Jocelyn', 'age'=>'34', 'gender'=>'Female', 'rating'=> 4, 'fee'=> 50000],
        ]);
    }
}

<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MedicineSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('medicines')->insert([
            ['name'=>'Panadol', 'type'=>'Kaplet', 'stock'=> 250, 'image'=>'/asset/medicine/Panadol.jpg', 'price'=> 123, 'desc'=>'Obat yang mengandung paracetamol, meredakan gejala dan keluhan, seperti demam, flu, sakit kepala, hidung tersumbat, batuk tidak berdahak, dan bersin-bersin. '],
            ['name'=>'Penisilin', 'type'=>'Tablet', 'stock'=> 250, 'image'=>'/asset/medicine/Penisilin.jpg', 'price'=> 123, 'desc'=>'Antibiotik yang digunakan untuk menangani infeksi bakteri, membunuh bakteri penyebab infeksi atau menghentikan pertumbuhannya.'],
            ['name'=>'Betadine', 'type'=>'Cairan', 'stock'=> 250, 'image'=>'/asset/medicine/Betadine.jpg', 'price'=> 123, 'desc'=>'bermanfaat untuk mencegah pertumbuhan dan membunuh kuman penyebab infeksi pada kulit, seperti infeksi akibat luka gores atau luka bakar ringan.'],
            ['name'=>'Bodrex', 'type'=>'Tablet', 'stock'=> 250, 'image'=>'/asset/medicine/Bodrex.jpg', 'price'=> 123, 'desc'=>'Bermanfaat untuk mengatasi sakit kepala, Dalam mengatasi sakit kepala, Bodrex mengandung bahan utama paracetamol dan kafein. Terdapat varian lain Bodrex yang bermanfaat untuk mengatasi migrain dan sakit kepala tegang.'],
            ['name'=>'Ponstan', 'type'=>'Tablet', 'stock'=> 250, 'image'=>'/asset/medicine/Ponstan.jpg', 'price'=> 123, 'desc'=>'Meredakan nyeri dan peradangan']   
        ]);
    }
}
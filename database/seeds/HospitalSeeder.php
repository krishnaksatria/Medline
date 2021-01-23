<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HospitalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('hospitals')->insert([
            ['name'=>'Ciputra Citra Garden City', 'address'=>'Jl. Satu Maret - Kalideres, Jakarta Barat, Jakarta, Indonesia 11820', 'phone'=>'02122557888', 'rating'=>'5', 'image'=>'asset/ciputra.jpg'],
            ['name'=>'Mata Aini Prof. Dr. Isak Salim', 'address'=>'Jl. Rumah Sakit Mata AINI, HR. Rasuna Said - Setiabudi, Jakarta Selatan, Jakarta, Indonesia 12920', 'phone'=>'0215732241', 'rating'=>'5', 'image'=>'asset/rumahsakitmataaini.jpg'],
            ['name'=>'Kasih Buddha Cinta Kasih Tzu Chi', 'address'=>'RT.6/RW.2, Kamal Muara, Kec. Penjaringan, Kota Jkt Utara, Daerah Khusus Ibukota Jakarta 14470', 'phone'=>'02155963680', 'rating'=>'5', 'image'=>'asset/tzuchi.jpg'],
            ['name'=>'Cipto Mangunkusumo - Kencana', 'address'=>'Jl. Pangeran Diponegoro No.71, RW.5, Kenari, Kec. Senen, Kota Jakarta Pusat, Daerah Khusus Ibukota Jakarta 10430', 'phone'=>'0211500135', 'rating'=>'5', 'image'=>'asset/ciptomangunkusumo.png'],
            ['name'=>'Ibu and Anak Budhi Jaya', 'address'=>'Jalan Dokter Sahardjo No.120, RT.1/RW.8, Menteng Atas, Jakarta, RT.1/RW.8, Menteng Atas, Kota Jakarta Selatan, Daerah Khusus Ibukota Jakarta 12960', 'phone'=>'0218311722', 'rating'=>'5', 'image'=>'asset/budhijaya.jpg'],
            ['name'=>'Persahabatan', 'address'=>'16, Jl. Persahabatan Raya No.1, RW.13, Rawamangun, Kec. Pulo Gadung, Daerah Khusus Ibukota Jakarta 13230', 'phone'=>'0214891708', 'rating'=>'5', 'image'=>'asset/persahabatan.jpg'],
            ['name'=>'Fatmawati', 'address'=>'Jl. RS. Fatmawati Raya No.4, RT.4/RW.9, Cilandak Bar., Kec. Cilandak, Kota Jakarta Selatan, Daerah Khusus Ibukota Jakarta 12430', 'phone'=>'0217501524', 'rating'=>'5', 'image'=>'asset/fatmawati.jpg'],
            ['name'=>'Ibu dan Anak Kemang Medical Care', 'address'=>'Jl. Ampera Raya No.34, RT.2/RW.9, Ragunan, Kec. Ps. Minggu, Kota Jakarta Selatan, Daerah Khusus Ibukota Jakarta 12550', 'phone'=>'02127545454', 'rating'=>'5', 'image'=>'asset/kemang.png'],
            ['name'=>'Mitra Keluarga Kalideres', 'address'=>'Jl. Peta Selatan No.1, RT.7/RW.11, Kalideres, Kec. Kalideres, Kota Jakarta Barat, Daerah Khusus Ibukota Jakarta 11840', 'phone'=>'02122523700', 'rating'=>'5', 'image'=>'asset/mkkalideres.png'],
            ['name'=>'Mayapada Lebak Bulus', 'address'=>'6, Jl. Lebak Bulus II No.86, RT.6/RW.4, Cilandak Bar., Kec. Cilandak, Kota Jakarta Selatan, Daerah Khusus Ibukota Jakarta 12430', 'phone'=>'02129217777', 'rating'=>'3', 'image'=>'asset/mayapada.png'],
            ['name'=>'Ibu dan Anak Bunda', 'address'=>'Jl. Teuku Cik Ditiro No.28, RT.9/RW.2, Gondangdia, Kec. Menteng, Kota Jakarta Pusat, Daerah Khusus Ibukota Jakarta 10350', 'phone'=>'+621500799', 'rating'=>'5', 'image'=>'asset/rsbunda.png'],
            ['name'=>'Grha Kedoya', 'address'=>'Jalan Panjang Arteri No.26, RT.15/RW.7, Kedoya Utara, Kec. Kb. Jeruk, Kota Jakarta Barat, Daerah Khusus Ibukota Jakarta 11520', 'phone'=>'02129910999', 'rating'=>'5', 'image'=>'asset/grahakedoya.png'],
        ]);
    }
}

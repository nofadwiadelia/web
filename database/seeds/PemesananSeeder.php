<?php

use Illuminate\Database\Seeder;

class PemesananSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();

    	$limit = 50;

    	for ($i = 0; $i < $limit; $i++){
    		DB::table('pemesanan_models')->insert([
    			'nama' => $faker->nama,
    			'alamat' => $faker->alamat,
    			'nohp' => $faker->nohp,
    			'tglpesan' => $faker->tglpesan,
                'namabarang' => $faker->namabarang,
                'jmlhpesanan' => $faker->jmlhpesanan,
                'harga' => $faker->harga,

    		]);
    }
}

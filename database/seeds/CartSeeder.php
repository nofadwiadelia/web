<?php

use Illuminate\Database\Seeder;

class CartSeeder extends Seeder
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
    		DB::table('model_carts')->insert([
    			'gambar' => $faker->gambar,
    			'jenis' => $faker->jenis,
    			'merk' => $faker->merk,
    			'harga' => $faker->harga,
    			'kategori' => $faker->kategori,
    		]);
    }
}

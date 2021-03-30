<?php

use Illuminate\Database\Seeder;
use App\Product;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $products = [
            [
                'kode'           => 'JD001',
                'nama'          => 'Jack Daniel',
                'harga'       => '500000',
                'stok' => '0',
            ],
            [
                'kode'           => 'AB001',
                'nama'          => 'Absolut Blue',
                'harga'       => '400000',
                'stok' => '0',
            ],
            [
                'kode'           => 'CM001',
                'nama'          => 'Captain Morgan Gold',
                'harga'       => '236900',
                'stok' => '0',
            ],
        ];

        Product::insert($products);
    }
}

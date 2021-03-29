<?php

use Illuminate\Database\Seeder;
use App\Customer;

class CustomerTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $customers = [
            [
                'name'           => 'Agus Suartawan',
                'address'          => 'Jl. Bedahulu XVII',
                'phone'       => '08234905680',
                'email' => 'agus@mail.com',
            ],
            [
                'name'           => 'Sandhika Galih',
                'address'          => 'Jl. Bandung No.23',
                'phone'       => '08523698745',
                'email' => 'sandhika@mail.com',
            ],
            [
                'name'           => 'Eren Jeager',
                'address'          => 'Jl. Paradise XVII',
                'phone'       => '0213698574',
                'email' => 'eren@mail.com',
            ],
        ];

        Customer::insert($customers);
    }
}

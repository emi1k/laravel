<?php

use Illuminate\Database\Seeder;

class ProductSeeds extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            'name' => 'Товар-1',
            'code' => 'Product-1',
            'quantity' => 2,
        ]);
        DB::table('products')->insert([
            'name' => 'Товар-2',
            'code' => 'Product-2',
            'quantity' => 3,
        ]);
        DB::table('products')->insert([
            'name' => 'Товар-3',
            'code' => 'Product-3',
            'quantity' => 4,
        ]);
    }
}

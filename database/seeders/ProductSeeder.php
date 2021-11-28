<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->truncate();
        Product::create([
            'name' => 'San pham 1',
            'detail' => 'Dep',
            'brand' => 'Gucci',
            'price' => '1000',
            'category_id' => '1',
            'image'=>'anh1.png',
            'created_at' => new \dateTime,
            'updated_at' => new \dateTime,
        ]);
        Product::create([
            'name' => 'San pham 2',
            'detail' => 'Dep',
            'brand' => 'Gucci',
            'price' => '2000',
            'category_id' => '4',
            'image'=>'anh2.png',
            'created_at' => new \dateTime,
            'updated_at' => new \dateTime,
        ]);
        Product::create([
            'name' => 'San pham 3',
            'detail' => 'Dep',
            'brand' => 'Gucci',
            'price' => '3000',
            'category_id' => '2',
            'image'=>'anh3.png',
            'created_at' => new \dateTime,
            'updated_at' => new \dateTime,
        ]);
        Product::create([
            'name' => 'San pham 4',
            'detail' => 'Dep',
            'brand' => 'Gucci',
            'price' => '4000',
            'category_id' => '1',
            'image'=>'anh4.png',
            'created_at' => new \dateTime,
            'updated_at' => new \dateTime,
        ]);
        Product::create([
            'name' => 'San pham 5',
            'detail' => 'Dep',
            'brand' => 'Gucci',
            'price' => '5000',
            'category_id' => '1',
            'image'=>'anh5.png',
            'created_at' => new \dateTime,
            'updated_at' => new \dateTime,
        ]);
        Product::create([
            'name' => 'San pham 6',
            'detail' => 'Dep',
            'brand' => 'Gucci',
            'price' => '6000',
            'category_id' => '3',
            'image'=>'anh6.png',
            'created_at' => new \dateTime,
            'updated_at' => new \dateTime,
        ]);
        Product::create([
            'name' => 'San pham 7',
            'detail' => 'Dep',
            'brand' => 'Gucci',
            'price' => '7000',
            'category_id' => '4',
            'image'=>'anh7.png',
            'created_at' => new \dateTime,
            'updated_at' => new \dateTime,
        ]);
    }
}

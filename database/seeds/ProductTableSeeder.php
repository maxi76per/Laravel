<?php
use Illuminate\Database\Seeder;
class ProductTableSeeder extends Seeder {
    public function run() { factory(App\Product::class, 12)->create(); }
}
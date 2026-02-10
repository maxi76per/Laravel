<?php
use Illuminate\Database\Seeder;
class BrandTableSeeder extends Seeder {
    public function run() { factory(App\Brand::class, 4)->create(); }
}
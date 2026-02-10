<?php
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder {
    public function run() {
        $this->call(CategoryTableSeeder::class);
        $this->command->info('Таблица категорий загружена данными!');

        $this->call(BrandTableSeeder::class);
        $this->command->info('Таблица брендов загружена данными!');

        $this->call(ProductTableSeeder::class);
        $this->command->info('Таблица товаров загружена данными!');
    }
}
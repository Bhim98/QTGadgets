<?php
use Illuminate\Database\Seeder;
use database\seeds\ProductsTableSeeder;
use database\seeds\CategoriesTableSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call('CategoriesTableSeeder');
        $this->call('ProductsTableSeeder');
    }
}

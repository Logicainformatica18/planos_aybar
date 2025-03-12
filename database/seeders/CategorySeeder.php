<?php
namespace Database\Seeders;
use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        Category::create(['description' => 'General','detail' =>'']);
        Category::create(['description' => 'Lotes','detail' =>'']);
        Category::create(['description' => 'Oportunidades de negocio','detail' =>'']);
        Category::create(['description' => 'Negocio','detail' =>'']);



    }
}

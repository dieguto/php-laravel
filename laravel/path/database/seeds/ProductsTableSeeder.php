<?php

use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::create([
            'title' => 'Notebook',
            'body' => 'Notebook Dell core i5',
            'value' => 2500.99,
            'qtd' => 20,
            'url' => 'https://http2.mlstatic.com/laptop-infantil-pc-ben-10-trilingue-84-atividades-candide-D_NQ_NP_984452-MLB25706926072_062017-F.webp'

        ]);
    }
}

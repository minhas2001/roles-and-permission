<?php

namespace Database\Seeders;


use App\Models\ProductType;
use Illuminate\Database\Seeder;

class ProductTypeSeeder extends Seeder
{
    public function run(): void
    {
        $productTypes = [
            [ 'name' => 'Trending', 'code' => '12332', ],
            [ 'name' => 'Best Seller', 'code' => '23435',  ],
            [ 'name' => 'Featured', 'code' => '3445',  ],

        ];
        foreach ( $productTypes as $productType ) {
            $model       = new ProductType();
            $model->name = $productType['name'];
            $model->code = $productType['code'];
            $model->save();
        }
    }
}

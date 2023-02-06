<?php

namespace Database\Seeders;

use App\Models\Fruit;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FruitsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $fruits = [
            [
                'name' => 'apple',
                'path' => '../../fruit_pages/apple.html'
            ],
            [
                'name' => 'banana',
                'path' => '../../fruit_pages/banana.html'
            ],
            [
                'name' => 'beefbrazil',
                'path' => '../../fruit_pages/beefbrazil.html'
            ],
            [
                'name' => 'beefswe',
                'path' => '../../fruit_pages/beefswe.html'
            ],
            [
                'name' => 'bread',
                'path' => '../../fruit_pages/bread.html'
            ],
            [
                'name' => 'brown-beans',
                'path' => '../../fruit_pages/brown-beans.html'
            ],
            [
                'name' => 'butter',
                'path' => '../../fruit_pages/butter.html'
            ],
            [
                'name' => 'cheese',
                'path' => '../../fruit_pages/cheese.html'
            ],
            [
                'name' => 'chicken',
                'path' => '../../fruit_pages/chicken.html'
            ],
            [
                'name' => 'chickpeas',
                'path' => '../../fruit_pages/chickpeas.html'
            ],
            [
                'name' => 'chocolate',
                'path' => '../../fruit_pages/chocolate.html'
            ],
            [
                'name' => 'cream',
                'path' => '../../fruit_pages/cream.html'
            ],
            [
                'name' => 'creme-fraiche',
                'path' => '../../fruit_pages/creme-fraiche.html'
            ],
            [
                'name' => 'crispbread',
                'path' => '../../fruit_pages/crispbread.html'
            ],
            [
                'name' => 'egg',
                'path' => '../../fruit_pages/egg.html'
            ],
            [
                'name' => 'chocolate',
                'path' => '../../fruit_pages/chocolate.html'
            ],
            [
                'name' => 'greean-peas',
                'path' => '../../fruit_pages/greean-peas.html'
            ],
            [
                'name' => 'herring',
                'path' => '../../fruit_pages/herring.html'
            ],
            [
                'name' => 'lamb',
                'path' => '../../fruit_pages/lamb.html'
            ],
            [
                'name' => 'lenses',
                'path' => '../../fruit_pages/lenses.html'
            ],
            [
                'name' => 'lettuce',
                'path' => '../../fruit_pages/lettuce.html'
            ],
            [
                'name' => 'margarine',
                'path' => '../../fruit_pages/margarine.html'
            ],
            [
                'name' => 'milk',
                'path' => '../../fruit_pages/milk.html'
            ],
            [
                'name' => 'minced-meat',
                'path' => '../../fruit_pages/minced-meat.html'
            ],
            [
                'name' => 'mussels',
                'path' => '../../fruit_pages/mussels.html'
            ],
            [
                'name' => 'onion',
                'path' => '../../fruit_pages/onion.html'
            ],
            [
                'name' => 'orange',
                'path' => '../../fruit_pages/orange.html'
            ],
            [
                'name' => 'pork',
                'path' => '../../fruit_pages/pork.html'
            ],
            [
                'name' => 'potato',
                'path' => '../../fruit_pages/potato.html'
            ],
            [
                'name' => 'quorn',
                'path' => '../../fruit_pages/quorn.html'
            ],
            [
                'name' => 'rapeseed-oil',
                'path' => '../../fruit_pages/rapeseed-oil.html'
            ],
            [
                'name' => 'rice',
                'path' => '../../fruit_pages/rice.html'
            ],
            [
                'name' => 'saithe',
                'path' => '../../fruit_pages/saithe.html'
            ],
            [
                'name' => 'salmon',
                'path' => '../../fruit_pages/salmon.html'
            ],
            [
                'name' => 'spaghetti',
                'path' => '../../fruit_pages/spaghetti.html'
            ],
            [
                'name' => 'spinach',
                'path' => '../../fruit_pages/spinach.html'
            ],
            [
                'name' => 'strawberry',
                'path' => '../../fruit_pages/strawberry.html'
            ],
            [
                'name' => 'sugar',
                'path' => '../../fruit_pages/sugar.html'
            ],
            [
                'name' => 'sweet-almond',
                'path' => '../../fruit_pages/sweet-almond.html'
            ],
            [
                'name' => 'tomato',
                'path' => '../../fruit_pages/tomato.html'
            ],
            [
                'name' => 'wheat',
                'path' => '../../fruit_pages/wheat.html'
            ],
            [
                'name' => 'wheatberry',
                'path' => '../../fruit_pages/wheatberry.html'
            ]



        ];
        foreach ($fruits as $fruit) {
            Fruit::create($fruit);
        }
    }
}

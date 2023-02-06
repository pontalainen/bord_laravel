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
                'path' => '../../fruit_pages/apple.html',
                'primary_card' => '4a:2c:74:1b',
                'secondary_card' => '4a:2c:74:1b'
            ],
            [
                'name' => 'banana',
                'path' => '../../fruit_pages/banana.html',
                'primary_card' => '4a:2c:74:1b',
                'secondary_card' => '4a:2c:74:1b'
            ],
            [
                'name' => 'beefbrazil',
                'path' => '../../fruit_pages/beefbrazil.html',
                'primary_card' => '4a:2c:74:1b',
                'secondary_card' => '4a:2c:74:1b'
            ],
            [
                'name' => 'beefswe',
                'path' => '../../fruit_pages/beefswe.html',
                'primary_card' => '4a:2c:74:1b',
                'secondary_card' => '4a:2c:74:1b'
            ],
            [
                'name' => 'bread',
                'path' => '../../fruit_pages/bread.html',
                'primary_card' => '4a:2c:74:1b',
                'secondary_card' => '4a:2c:74:1b'
            ],
            [
                'name' => 'brown-beans',
                'path' => '../../fruit_pages/brown-beans.html',
                'primary_card' => '4a:2c:74:1b',
                'secondary_card' => '4a:2c:74:1b'
            ],
            [
                'name' => 'butter',
                'path' => '../../fruit_pages/butter.html',
                'primary_card' => '4a:2c:74:1b',
                'secondary_card' => '4a:2c:74:1b'
            ],
            [
                'name' => 'cheese',
                'path' => '../../fruit_pages/cheese.html',
                'primary_card' => '4a:2c:74:1b',
                'secondary_card' => '4a:2c:74:1b'
            ],
            [
                'name' => 'chicken',
                'path' => '../../fruit_pages/chicken.html',
                'primary_card' => '4a:2c:74:1b',
                'secondary_card' => '4a:2c:74:1b'
            ],
            [
                'name' => 'chickpeas',
                'path' => '../../fruit_pages/chickpeas.html',
                'primary_card' => '4a:2c:74:1b',
                'secondary_card' => '4a:2c:74:1b'
            ],
            [
                'name' => 'chocolate',
                'path' => '../../fruit_pages/chocolate.html',
                'primary_card' => '4a:2c:74:1b',
                'secondary_card' => '4a:2c:74:1b'
            ],
            [
                'name' => 'cream',
                'path' => '../../fruit_pages/cream.html',
                'primary_card' => '4a:2c:74:1b',
                'secondary_card' => '4a:2c:74:1b'
            ],
            [
                'name' => 'creme-fraiche',
                'path' => '../../fruit_pages/creme-fraiche.html',
                'primary_card' => '4a:2c:74:1b',
                'secondary_card' => '4a:2c:74:1b'
            ],
            [
                'name' => 'crispbread',
                'path' => '../../fruit_pages/crispbread.html',
                'primary_card' => '4a:2c:74:1b',
                'secondary_card' => '4a:2c:74:1b'
            ],
            [
                'name' => 'egg',
                'path' => '../../fruit_pages/egg.html',
                'primary_card' => '4a:2c:74:1b',
                'secondary_card' => '4a:2c:74:1b'
            ],
            [
                'name' => 'chocolate',
                'path' => '../../fruit_pages/chocolate.html',
                'primary_card' => '4a:2c:74:1b',
                'secondary_card' => '4a:2c:74:1b'
            ],
            [
                'name' => 'greean-peas',
                'path' => '../../fruit_pages/greean-peas.html',
                'primary_card' => '4a:2c:74:1b',
                'secondary_card' => '4a:2c:74:1b'
            ],
            [
                'name' => 'herring',
                'path' => '../../fruit_pages/herring.html',
                'primary_card' => '4a:2c:74:1b',
                'secondary_card' => '4a:2c:74:1b'
            ],
            [
                'name' => 'lamb',
                'path' => '../../fruit_pages/lamb.html',
                'primary_card' => '4a:2c:74:1b',
                'secondary_card' => '4a:2c:74:1b'
            ],
            [
                'name' => 'lenses',
                'path' => '../../fruit_pages/lenses.html',
                'primary_card' => '4a:2c:74:1b',
                'secondary_card' => '4a:2c:74:1b'
            ],
            [
                'name' => 'lettuce',
                'path' => '../../fruit_pages/lettuce.html',
                'primary_card' => '4a:2c:74:1b',
                'secondary_card' => '4a:2c:74:1b'
            ],
            [
                'name' => 'margarine',
                'path' => '../../fruit_pages/margarine.html',
                'primary_card' => '4a:2c:74:1b',
                'secondary_card' => '4a:2c:74:1b'
            ],
            [
                'name' => 'milk',
                'path' => '../../fruit_pages/milk.html',
                'primary_card' => '4a:2c:74:1b',
                'secondary_card' => '4a:2c:74:1b'
            ],
            [
                'name' => 'minced-meat',
                'path' => '../../fruit_pages/minced-meat.html',
                'primary_card' => '4a:2c:74:1b',
                'secondary_card' => '4a:2c:74:1b'
            ],
            [
                'name' => 'mussels',
                'path' => '../../fruit_pages/mussels.html',
                'primary_card' => '4a:2c:74:1b',
                'secondary_card' => '4a:2c:74:1b'
            ],
            [
                'name' => 'onion',
                'path' => '../../fruit_pages/onion.html',
                'primary_card' => '4a:2c:74:1b',
                'secondary_card' => '4a:2c:74:1b'
            ],
            [
                'name' => 'orange',
                'path' => '../../fruit_pages/orange.html',
                'primary_card' => '4a:2c:74:1b',
                'secondary_card' => '4a:2c:74:1b'
            ],
            [
                'name' => 'pork',
                'path' => '../../fruit_pages/pork.html',
                'primary_card' => '4a:2c:74:1b',
                'secondary_card' => '4a:2c:74:1b'
            ],
            [
                'name' => 'potato',
                'path' => '../../fruit_pages/potato.html',
                'primary_card' => '4a:2c:74:1b',
                'secondary_card' => '4a:2c:74:1b'
            ],
            [
                'name' => 'quorn',
                'path' => '../../fruit_pages/quorn.html',
                'primary_card' => '4a:2c:74:1b',
                'secondary_card' => '4a:2c:74:1b'
            ],
            [
                'name' => 'rapeseed-oil',
                'path' => '../../fruit_pages/rapeseed-oil.html',
                'primary_card' => '4a:2c:74:1b',
                'secondary_card' => '4a:2c:74:1b'
            ],
            [
                'name' => 'rice',
                'path' => '../../fruit_pages/rice.html',
                'primary_card' => '4a:2c:74:1b',
                'secondary_card' => '4a:2c:74:1b'
            ],
            [
                'name' => 'saithe',
                'path' => '../../fruit_pages/saithe.html',
                'primary_card' => '4a:2c:74:1b',
                'secondary_card' => '4a:2c:74:1b'
            ],
            [
                'name' => 'salmon',
                'path' => '../../fruit_pages/salmon.html',
                'primary_card' => '4a:2c:74:1b',
                'secondary_card' => '4a:2c:74:1b'
            ],
            [
                'name' => 'spaghetti',
                'path' => '../../fruit_pages/spaghetti.html',
                'primary_card' => '4a:2c:74:1b',
                'secondary_card' => '4a:2c:74:1b'
            ],
            [
                'name' => 'spinach',
                'path' => '../../fruit_pages/spinach.html',
                'primary_card' => '4a:2c:74:1b',
                'secondary_card' => '4a:2c:74:1b'
            ],
            [
                'name' => 'strawberry',
                'path' => '../../fruit_pages/strawberry.html',
                'primary_card' => '4a:2c:74:1b',
                'secondary_card' => '4a:2c:74:1b'
            ],
            [
                'name' => 'sugar',
                'path' => '../../fruit_pages/sugar.html',
                'primary_card' => '4a:2c:74:1b',
                'secondary_card' => '4a:2c:74:1b'
            ],
            [
                'name' => 'sweet-almond',
                'path' => '../../fruit_pages/sweet-almond.html',
                'primary_card' => '4a:2c:74:1b',
                'secondary_card' => '4a:2c:74:1b'
            ],
            [
                'name' => 'tomato',
                'path' => '../../fruit_pages/tomato.html',
                'primary_card' => '4a:2c:74:1b',
                'secondary_card' => '4a:2c:74:1b'
            ],
            [
                'name' => 'wheat',
                'path' => '../../fruit_pages/wheat.html',
                'primary_card' => '4a:2c:74:1b',
                'secondary_card' => '4a:2c:74:1b'
            ],
            [
                'name' => 'wheatberry',
                'path' => '../../fruit_pages/wheatberry.html',
                'primary_card' => '4a:2c:74:1b',
                'secondary_card' => '4a:2c:74:1b'
            ]



        ];
        foreach ($fruits as $fruit) {
            Fruit::create($fruit);
        }
    }
}

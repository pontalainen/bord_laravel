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
                'name' => 'test',
                'path' => 'This is a test page, fyi'
            ],
            [
                'name' => 'test nr.2',
                'path' => 'This is ANOTHER test page, fyi again'
            ]

        ];
        foreach ($fruits as $fruit) {
            Fruit::create($fruit);
        }
    }
}

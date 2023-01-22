<?php

namespace Database\Seeders;

use App\Models\Page;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $pages = [
            [
                'name' => 'test',
                'content' => 'This is a test page, fyi'
            ],
            [
                'name' => 'test nr.2',
                'content' => 'This is ANOTHER test page, fyi again'
            ]

        ];
        foreach ($pages as $page) {
            Page::create($page);
        }
    }
}

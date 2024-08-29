<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Categories extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \DB::table('categories')->insert(
            [
                [
                    'id' => 1,
                    'category' => 'World',
                    
                ],
                [
                    'id' => 2,
                    'category' => 'Polystic'
                ],
                [
                    'id' => '3',
                    'category' => 'Sport'
                ],
                [
                    'id' => '4',
                    'category' => 'Business'
                ]
            ]
        );
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TipoDeAnimais extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Animals::create([
            'id' => 1,
            'description' => 'Cachorro de bigode',
        ],
        [
            'id' => 2,
            'description' => 'Gato de botas',
        ]
        );
    }
}

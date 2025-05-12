<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ReactionTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $types = [
            ['name' => 'like', 'icon' => '👍'],
            ['name' => 'love', 'icon' => '❤️'],
            ['name' => 'laugh', 'icon' => '😂'],
            ['name' => 'sad', 'icon' => '😢'],
            ['name' => 'angry', 'icon' => '😡'],
        ];

        foreach ($types as $type) {
            \App\Models\ReactionType::firstOrCreate(['name' => $type['name']], $type);
        }
    }

}

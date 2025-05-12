<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    public function run()
    {
        $categories = [
            'Tafsir Al-Qur\'an',
            'Hadits Shahih',
            'Fiqih Ibadah',
            'Doa dan Dzikir',
            'Sejarah Islam',
            'Aqidah & Tauhid',
            'Adab & Akhlak',
            'Keluarga Islami',
            'Motivasi Islami',
            'Kajian Harian'
        ];

        foreach ($categories as $name) {
            Category::firstOrCreate([
                'name' => $name,
                'slug' => Str::slug($name),
            ]);
        }
    }
}

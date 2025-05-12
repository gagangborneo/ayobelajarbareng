<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use App\Models\Post;
use App\Models\Category;
use App\Models\User;

class PostSeeder extends Seeder
{
    public function run()
    {
        $user = User::first(); // gunakan user pertama sebagai author
        $categories = Category::all();

        $posts = [
            [
                'title' => 'Keutamaan Membaca Surah Al-Kahfi di Hari Jumat',
                'category' => 'Tafsir Al-Qur\'an',
                'cover_image' => 'uploads/posts/alkahfi.jpg',
                'meta' => [
                    'description' => 'Surah Al-Kahfi memiliki banyak keutamaan di hari Jumat. Simak penjelasannya.',
                    'keywords' => 'surah al-kahfi, jumat, keutamaan'
                ],
                'status' => 'published'
            ],
            [
                'title' => 'Hadits Tentang Menjaga Lisan',
                'category' => 'Hadits Shahih',
                'cover_image' => 'uploads/posts/menjaga-lisan.jpg',
                'meta' => [
                    'description' => 'Menjaga lisan adalah salah satu kunci keselamatan dalam Islam.',
                    'keywords' => 'hadits, lisan, keselamatan'
                ],
                'status' => 'published'
            ],
            [
                'title' => 'Panduan Lengkap Shalat Dhuha',
                'category' => 'Fiqih Ibadah',
                'cover_image' => 'uploads/posts/shalat-dhuha.jpg',
                'meta' => [
                    'description' => 'Pelajari tata cara dan keutamaan shalat dhuha.',
                    'keywords' => 'shalat dhuha, ibadah, sunnah'
                ],
                'status' => 'published'
            ]
        ];

        foreach ($posts as $data) {
            $category = $categories->firstWhere('name', $data['category']);
            Post::create([
                'user_id' => $user->id,
                'category_id' => $category->id,
                'title' => $data['title'],
                'slug' => Str::slug($data['title']),
                'content' => '<p>Konten artikel islami lengkap akan ditulis di sini.</p>',
                'cover_image' => $data['cover_image'],
                'meta' => $data['meta'],
                'status' => $data['status']
            ]);
        }
    }
}


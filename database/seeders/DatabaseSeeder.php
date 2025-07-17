<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        // buat role admin dan creator
        \Spatie\Permission\Models\Role::create(['name' => 'admin']);
        \Spatie\Permission\Models\Role::create(['name' => 'usatidz']);
        \Spatie\Permission\Models\Role::create(['name' => 'creator']);

        $user = User::factory()->create([
            'name' => 'Test User',
            'email' => 'qweqwe@mail.com',
            'phone_number' => '08125144744',
            'password' => Hash::make('qweqwe'),
        ]);
        $user->assignRole('admin', 'usatidz');


        $this->call(CategorySeeder::class);
        $this->call(PostSeeder::class);
        $this->call(ReactionTypeSeeder::class);

    }
}

<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory()->create([
            'name' => 'Test',
            'email' => 'test@cursosdesarrolloweb.es',
        ]);

        User::factory()->create([
            'name' => 'Test 2',
            'email' => 'test2@cursosdesarrolloweb.es',
        ]);
    }
}

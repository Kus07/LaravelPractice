<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        \App\Models\Product::factory(5)->create();

        // \App\Models\Products::factory()->create([
        //     'id' => '1',
        //     'name' => 'Test User',
        //     'quantity' => '3',
        //     'created_at' => 'Test User',
        //     'uploaded_at' => 'Test User',
        // ]);
    }
}

<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Hero;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Hero::factory()->create([
            'alive' => true,
            'heroName' => 'Arya',
            'familyName' => 'Stronk',
            'age' => 20,
            'birthday' => '2000-01-01',
            'culture' => 'Northmen',
            'children' => 'null',
            'powers' => 'Dikke billen',
        ]);

    }
}

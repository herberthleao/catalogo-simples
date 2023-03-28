<?php

namespace Database\Seeders;

use App\Models\Author;
use Illuminate\Database\Seeder;

/**
 * Author seed.
 */
class AuthorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Author::factory(100)->create();
    }
}

<?php

use App\Genre;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(GenreSeeder::class);
        $this->call(PlatformSeeder::class);
        $this->call(ConsoleSeeder::class);
    }
}

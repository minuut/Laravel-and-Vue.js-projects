<?php

// DatabaseSeeder.php
namespace Database\Seeders;

use App\Models\User;
use App\Models\PropertyListing;
use Illuminate\Database\Seeder;
use Database\Seeders\UsersWithPropertiesSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UsersWithPropertiesSeeder::class);
    }
}

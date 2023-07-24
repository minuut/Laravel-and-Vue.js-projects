<?php
namespace Database\Seeders;

use App\Models\User;
use App\Models\PropertyListing;
use Illuminate\Database\Seeder;

class UsersWithPropertiesSeeder extends Seeder
{
    /**
     * Seed the users table with fake data.
     *
     * @return void
     */
    public function run()
    {
        User::factory(50)->create()->each(function ($user) {
            $user->propertyListings()->saveMany(PropertyListing::factory(6)->make());
        });
    }
}

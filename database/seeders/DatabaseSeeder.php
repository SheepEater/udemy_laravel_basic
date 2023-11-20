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
        $this->call([
            TestSeeder::class,
            UserSeeder::class,
            AreaSeeder::class, //親の方から書く。　親）Area
            ShopSeeder::class, // 　子）Shop
            RouteSeeder::class,
            RouteShopSeeder::class
        ]);

        \App\Models\ContactForm::factory(100)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}

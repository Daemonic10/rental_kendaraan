<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\cars;
use App\Models\rental_details;
use App\Models\rentals;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'password' => 'admin123'
        ]);

        $car=cars::create([
            "brand_model" => "Ferrari",
            "category" => "Sedan",
            "rental_rate_per_day" => "100000",
            "plate_number" => "1234",
            "image" => "Kosong"
        ]);
        $rental=rentals::create([
            "customer_name" => "Test User",
            "nik_number" => 2313,
            "start_date" => "2020-10-20",
            "end_date" => "2020-10-22",
            "total_price" => 10000,
            "status" => 'Disewa'

        ]);

        rental_details::create([
            "rental_id" => $rental->id,
            "car_id" => $car->id,
            "day_count" => 100000,
            "sub_total" => 1234,
        ]);

    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Room;

class RoomSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        if (Room::exists()) {
            return;
        }

        Room::factory()->count(8)->create();
        Room::factory()->count(2)->inactive()->create();
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    /** @use HasFactory<\Database\Factories\RoomFactory> */
    use HasFactory;

    protected $fillable = ['name', 'type', 'capacity', 'price_per_night', 'currency', 'description', 'is_active'];


    protected function casts(): array
    {
        return [
            'is_active' => 'boolean',
            'breakfast_included' => 'boolean',
        ];
    }    
}

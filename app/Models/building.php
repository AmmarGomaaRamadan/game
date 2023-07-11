<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class building extends Model
{
    protected $fillable=[
        'building_name',
        'buildng_location',
        'building_description',
        'building_price',
        'building_employees_number',
        'building_level',
        'building_slots'

    ];
    use HasFactory;
}

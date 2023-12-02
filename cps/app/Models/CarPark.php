<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CarPark extends Model
{
    use HasFactory;

    protected $primaryKey = 'id';
    public $incrementing = false;
    protected $keyType = 'string';

    protected $fillable = [
        'car_park_name',
        'location',
        'maximum_capacity',
        'operator_id'
    ];

    public function operator()
    {
        return $this->belongsTo(User::class, 'operator_id', 'id');
    }

    public function bookings()
    {
        return $this->hasMany(Booking::class, 'car_park_id', 'id');
    }

    public function spaces()
    {
        return $this->hasMany(Space::class, 'car_park_id', 'id');
    }

    public function schematic()
    {
        return $this->hasOne(Schematic::class, 'car_park_id', 'id');
    }
}

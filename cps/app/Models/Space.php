<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Space extends Model
{
    use HasFactory;

    protected $primaryKey = 'id';
    public $incrementing = false;
    protected $keyType = 'string';

    protected $fillable = [
        'car_park_id',
        'space_number',
        'space_type',
        'status',
        'rate'
    ];

    public function carPark()
    {
        return $this->belongsTo(CarPark::class, 'car_park_id', 'id');
    }

    public function bookings()
    {
        return $this->hasMany(Booking::class, 'space_id', 'id');
    }
}

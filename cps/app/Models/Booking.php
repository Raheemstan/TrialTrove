<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;

    protected $primaryKey = 'id';
    public $incrementing = false;
    protected $keyType = 'string';

    protected $fillable = [
        'user_id',
        'car_park_id',
        'booking_date_time',
        'entry_date_time',
        'exit_date_time',
        'payment_status',
        'booking_status'
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function carPark()
    {
        return $this->belongsTo(CarPark::class, 'car_park_id', 'id');
    }

    public function payment()
    {
        return $this->hasOne(Payment::class, 'booking_id', 'id');
    }

    public function cancellation()
    {
        return $this->hasOne(Cancellation::class, 'booking_id', 'id');
    }
}

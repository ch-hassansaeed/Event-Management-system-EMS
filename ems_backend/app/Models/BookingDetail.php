<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BookingDetail extends Model
{
    protected $fillable = ['event_id', 'e_name', 'e_date', 't_type', 'c_name', 'c_email', 'no_of_tickets', 'cost'];
}

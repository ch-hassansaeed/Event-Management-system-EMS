<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sale extends Model
{
    protected $table = 'sales';
    protected $fillable = ['event_id', 'n_sold', 's_sold', 'g_sold', 'p_sold', 'total_sold', 'total_revenue'];
}

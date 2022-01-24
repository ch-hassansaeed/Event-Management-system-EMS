<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SalesDetail extends Model
{
    protected $fillable = ['event_id', 'e_name', 'e_organizer', 'e_date', 't_type', 'n_rev', 's_rev', 'g_rev', 'p_rev', 'total_revenue'];
}

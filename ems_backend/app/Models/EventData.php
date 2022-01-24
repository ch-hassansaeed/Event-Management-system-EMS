<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EventData extends Model
{
    protected $fillable = ['event_id', 'e_name', 'e_desc', 'e_location', 'e_date', 'e_organizer', 'e_catagory', 'e_image_url', 't_type', 'n_val', 's_val', 'g_val', 'p_val', 'total_sold', 'total_revenue'];
}
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cost extends Model
{
    protected $table = 'costs';
    protected $fillable = ['event_id', 't_type', 'normal', 'silver', 'gold', 'platinum'];
}

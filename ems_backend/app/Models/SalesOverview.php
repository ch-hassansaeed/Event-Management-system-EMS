<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class SalesOverview extends Model
{

    protected $fillable = ['total_sold', 'total_revenue', 'n_count', 's_count', 'g_count', 'p_count', 'n_rev', 's_rev', 'g_rev', 'p_rev'];
}

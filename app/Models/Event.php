<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

    protected $fillable = ['brands_id', 'seasons_id', 'collections_id', 'places_id', 'money_id', 'date_time', 'location', 'online_events'];




}

<?php

namespace App\Models;

use App\Models\Brand;
use App\Models\Season;
use App\Models\Collection;
use App\Models\Place;
Use App\Models\Money;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Event extends Model
{
    use HasFactory;

    protected $fillable = ['brands_id', 'seasons_id', 'collections_id', 'places_id', 'money_id', 'date_time', 'location', 'online_events'];
    

    public function brand(){

        return $this->belongsTo(Brand::class, 'brands_id');
    }
    public function season(){

        return $this->belongsTo(Season::class, 'seasons_id');
    }

    public function collection(){
        
        return $this->belongsTo(Collection::class, 'collections_id');
    }

    public function place(){

        return $this->belongsTo(Place::class, 'places_id');  
    }

    public function money(){

        return $this->belongsTo(Money::class, 'money_id');
    }

    

   


}

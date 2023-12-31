<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Event;

class Brand extends Model
{
    use HasFactory;
    
    protected $fillable = ['brand_name', 'creative_director', 'headquarters', 'established_year', 'website', 'image_logo'];


    public function events(){

        return $this->hasMany(Event::class);
    }



    


}

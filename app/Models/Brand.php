<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Event;

class Brand extends Model
{
    use HasFactory;
    
    protected $fillable = ['name_brand', 'creative_director', 'headquarters', 'established_year', 'image_logo', 'website'];


    public function events(){

        return $this->hasMany(Event::class);
    }



    


}

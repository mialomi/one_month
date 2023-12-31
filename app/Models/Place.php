<?php

namespace App\Models;

use App\Models\Event;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Place extends Model
{
    use HasFactory;


    protected $fillable = ['city'];

    public function events(){
        
        return $this->hasMany(Event::class);
    }


}

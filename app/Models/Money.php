<?php

namespace App\Models;

use App\Models\Event;
use App\Models\Brand;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Money extends Model
{
    use HasFactory;

    protected $fillable = ['spendings', 'earnings, brands_id'];

    public function brands(){
        return $this->hasMany(Brand::class);
    }

    public function events(){
        return $this->hasMany(Event::class);
    }


}

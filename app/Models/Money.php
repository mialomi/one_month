<?php

namespace App\Models;

use App\Models\Event;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Money extends Model
{
    use HasFactory;

    protected $fillable = ['spendings', 'earnings'];


    public function event(){
        return $this->hasOne(Event::class, 'money_id');
    }


}

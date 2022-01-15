<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    use HasFactory;

    protected $fillable = [

        'city'
    ];

    public function news()
    {
        return $this->hasMany(News::class, 'cities_id');//один город ко многим новостям
    }

}

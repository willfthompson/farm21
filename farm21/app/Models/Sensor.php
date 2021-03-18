<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sensor extends Model
{
    use HasFactory;

    protected $fillable = [
            'name',
            'long',
            'lat',
            'status',  
        ];

        public function orders(){
            return $this->hasMany(Groups::class);
        }
}

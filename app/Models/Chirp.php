<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Chirp extends Model
{
    use HasFactory;
    public function chirps(): HasMany
    {
        return $this->hasMany(Chirp::class);
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Chirp extends Model
{
    use HasFactory;
    public function chirps(): HasMany
    {
        return $this->hasMany(Chirp::class);
    }
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}

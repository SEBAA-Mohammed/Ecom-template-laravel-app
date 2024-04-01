<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class ModeReglement extends Model
{
    use HasFactory;

    protected $fillable = [
        'mode_reglement'
    ];

    public function commandes(): HasMany
    {
        return $this->hasMany(Commande::class);
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Commande extends Model
{
    use HasFactory;

    public function etat(): BelongsTo
    {
        return $this->belongsTo(Etat::class);
    }

    public function mode_reglement(): BelongsTo
    {
        return $this->belongsTo(ModeReglement::class);
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function detail_commandes(): HasMany
    {
        return $this->hasMany(DetailCommande::class);
    }
}

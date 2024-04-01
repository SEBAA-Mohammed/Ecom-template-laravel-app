<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Produit extends Model
{
    use HasFactory;

    public function marque(): BelongsTo
    {
        return $this->belongsTo(Marque::class);
    }

    public function unite(): BelongsTo
    {
        return $this->belongsTo(Unite::class);
    }

    public function sous_famille(): BelongsTo
    {
        return $this->belongsTo(SousFamille::class);
    }

    public function detail_commandes(): HasMany
    {
        return $this->hasMany(DetailCommande::class);
    }
}

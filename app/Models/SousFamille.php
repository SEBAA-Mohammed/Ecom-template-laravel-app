<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class SousFamille extends Model
{
    use HasFactory;

    protected $fillable = [
        'libelle'
    ];

    public function produits(): HasMany
    {
        return $this->hasMany(Produit::class);
    }

    public function famille(): BelongsTo
    {
        return $this->belongsTo(Famille::class);
    }
}

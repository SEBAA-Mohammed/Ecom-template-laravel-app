<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Unite extends Model
{
    use HasFactory;

    protected $fillable = [
        'unite'
    ];

    public function produits(): HasMany
    {
        return $this->hasMany(Produit::class);
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Etat extends Model
{
    use HasFactory;


    protected $fillable = [
        'etat'
    ];

    public function commandes(): HasMany
    {
        return $this->hasMany(Commande::class);
    }
}

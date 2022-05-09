<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{

    protected $casts = [
        'DateNaissance' => 'date:d-m-Y',
    ];

    protected $fillable = [
        'Nom', 'Prenom', 'Categorie_id',
    ];

    use HasFactory;

    public function categorie()
    {
        return $this->belongsTo(Categorie::class);
    }
}

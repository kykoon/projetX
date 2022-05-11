<?php

namespace App\Models;

use App\Models\Client;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categorie extends Model
{
    protected $fillable = [
        'Libelle',
    ];
    
    use HasFactory;

    public function clients()
    {
        return $this->hasMany(Client::class);
    }

    
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
class Fournisseur extends Model
{
    protected $fillable = ['nom', 'adresse', 'telephone'];
    
    public function produits()
    {
        return $this->hasMany(Produit::class);
    }


    protected $hidden = [
        'password', 'remember_token',
    ];
}

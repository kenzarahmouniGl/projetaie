<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Collections;
use App\Models\Boutique;

class Products extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'description', 'reference', 'prix', 'photo','collection_id','boutique_id'];
    protected $table = 'products';


   public function collection()
{
    return $this->belongsTo(Collections::class);
}
public function boutique()
{
    return $this->belongsTo(Boutique::class);
}


}

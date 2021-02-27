<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProdutoCategoria extends Model
{
    use HasFactory;

    public function categorias()
    {
        return $this->belongsToMany(Categoria::class);
    }

    public function produtos()
    {
        return $this->belongsToMany(Produto::class);
    }
}

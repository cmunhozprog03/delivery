<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    use HasFactory;

    protected $table = 'categorias';

    protected $fillable = ['setor_id', 'name', 'description', 'body', 'slug', 'active', 'position', 'image'];

    public function setor()
    {
        return $this->belongsTo(Setor::class);
    }
}

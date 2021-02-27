<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Setor extends Model
{
    use HasFactory;

    protected $table = 'setores';

    protected $fillable = ['name', 'description', 'body', 'slug', 'active', 'position', 'image'];

    public function categoria()
    {
        return $this->hasMany(Categoria::class);
    }
}

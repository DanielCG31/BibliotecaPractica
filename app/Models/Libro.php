<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Categoria;

class Libro extends Model
{
    protected $table_name = 'Libros';

    public function categoria()
    {
        return $this->belongsTo(Categoria::class, 'categoria_id');
    }
}

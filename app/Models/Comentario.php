<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Comentario extends Model
{
    use HasFactory;

    protected $table = 'comentarios';

    public function autor(): HasOne
    {
        return $this->hasOne(User::class, 'id', 'user_id');
    }

}

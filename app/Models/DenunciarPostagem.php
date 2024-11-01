<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class DenunciarPostagem extends Model
{
    use HasFactory;

    protected $table = 'denuncia_postagens';

    public function postagem(): HasOne
    {
        return $this->hasOne(Postagem::class, 'id', 'postagem_id');
    }

    public function denunciante(): HasOne
    {
        return $this->hasOne(User::class, 'id', 'user_id');
    }


}

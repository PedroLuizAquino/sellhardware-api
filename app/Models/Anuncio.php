<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\Pivot;

class Anuncio extends Pivot
{
    

    protected $table = 'anuncio';
    //public $timestamps = false;

    protected $fillable = [
       'id_prod',
       'titulo',
       'quantidade',
       'condicao_produto',
       'status_anuncio',
       'media',
       'observacoes',
       'id_usuario',
       'id_produto'
    ];

    public function user()
    {
        return $this->belongsTo(related: User::class, foreignKey: 'id_usuario' ,ownerKey: 'id');
    }
}

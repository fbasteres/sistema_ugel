<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TipoPro extends Model
{
    use HasFactory;
    protected $table = "tipopro";


    //relacion uno a muchos
    public function form_tipopro(): HasMany
    {
        return $this->hasMany(Form1::class, 'tipoPro_id', 'id');
    }
}

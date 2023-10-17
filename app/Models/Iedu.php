<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

use App\Models\CodInst;

class Iedu extends Model
{
    use HasFactory;

    protected $table = "iedu";


    //Relación de uno a uno
    //public function InstCod(){    
       // return $this->hasOne(CodInst::Class, 'iedu_id', 'id');
    //}
    //relacion uno a muchos
    public function formulario1(): HasMany
    {
        return $this->hasMany(Form1::class, 'iedu_id', 'id');
    }

}


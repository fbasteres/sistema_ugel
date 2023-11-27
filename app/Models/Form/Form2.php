<?php

namespace App\Models\Form;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use App\Models\Iedu;
use App\Models\TipoPro;

class Form2 extends Model
{
    use HasFactory;
    protected $table = "form2";

    //Relacion uno a uno
    public function iedu(): HasOne
    {
        return $this->hasOne(Iedu::class, 'id', 'iedu_id');
    }

    //relacion uno a uno
    public function tipopro(): HasOne
    {
        return $this->hasOne(TipoPro::class, 'id', 'tipoPro_id');
    }
}

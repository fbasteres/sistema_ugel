<?php

namespace App\Models\Alm;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use App\Models\Iedu;
use App\Models\TipoPro;

class Alm1 extends Model
{
    use HasFactory;
    protected $table = "alm1";

    public function iedu(): HasOne
    {
        return $this->hasOne(Iedu::class, 'id', 'iedu_id');
    }

    public function tipopro(): HasOne
    {
        return $this->hasOne(TipoPro::class, 'id', 'tipoPro_id');
    }

    public function Caract(): HasOne
    {
        return $this->hasOne(TipoPro::class, 'id', 'carac_id');
    }

}

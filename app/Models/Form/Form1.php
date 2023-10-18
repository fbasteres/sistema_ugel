<?php

namespace App\Models\Form;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use App\Models\Iedu;
use App\Models\TipoPro;


class Form1 extends Model
{
    use HasFactory;

    protected $table = "form1";
    protected $fillable = [
        'region_id',
        'provincia_id'

    ];


    public function iedu(): HasOne
    {
        return $this->hasOne(Iedu::class, 'id', 'iedu_id');
    }

    public function tipopro(): HasOne
    {
        return $this->hasOne(TipoPro::class, 'id', 'tipoPro_id');
    }
}

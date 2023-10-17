<?php

namespace App\Models\Form;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use App\Models\Iedu;


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
}

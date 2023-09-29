<?php

namespace App\Models\Form;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Form1 extends Model
{
    use HasFactory;

    protected $table = "form1";
    protected $fillable = [
        'region_id',
        'provincia_id'

    ];
}

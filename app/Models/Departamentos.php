<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Departamentos extends Model
{
    use HasFactory;
    /**
    * @var string
    */
    protected $fillable = [
        'name'
    ];


    public function provincia(): HasOne
    {
        return $this->hasOne(Provincias::class, 'id', 'departamento_id');
    }
}



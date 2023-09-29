<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Iedu;

class CodInst extends Model
{
    use HasFactory;
    protected $table = "cod";



    //Relación de uno a uno
    public function Iedu(){    
        return $this->belongsTo(Iedu::Class, 'iedu_id', 'id');
    }
}



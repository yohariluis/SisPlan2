<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tbl_parametros_model extends Model
{
    use HasFactory;
    protected $table = 'tbl_parametros';
    //protected $primaryKey = 'aidparametro';
    protected $fillable = [
        'atipoplanprederminado',
        'aversionpredeterminada',
        'auebpredeterminada'
    ];
}

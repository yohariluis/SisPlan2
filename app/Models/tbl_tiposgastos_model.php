<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tbl_tiposgastos_model extends Model
{
    use HasFactory;
    protected $table = 'tbl_tiposgastos';
    //protected $primaryKey = 'aidtipogasto';
    protected $fillable = [
        'aidtipogasto',
        'aestado',
    ];

    public function detallegasto(){
        return $this->hasmany(tbl_detallesgastos_model::class);// tipoa gastos tiene muchos detalle gastos
    }
}

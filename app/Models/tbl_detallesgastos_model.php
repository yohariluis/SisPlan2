<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tbl_detallesgastos_model extends Model
{
    use HasFactory;
    protected $table = 'tbl_detallesgastos';
    //protected $primaryKey = 'aiddetallegasto';
    protected $fillable = [
        'aidplan',
        'aidueb',
        'aidtipogasto',
        'ames',
        'aplangasto',
        'arealgasto',
        'aobservaciones',
    ];

    public function plan(){
        return $this->belongsTo(tbl_planes_model::class);// detalle de gasto pertenece a plan
    }
    public function ueb(){
        return $this->belongsTo(tbl_ueb_model::class);// detalle de gasto pertenece a ueb
    }
    public function tipogasto(){
        return $this->belongsTo(tbl_tiposgastos_model::class);// detalle de gasto pertenece a ueb
    }
    
}

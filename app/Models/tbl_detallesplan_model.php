<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tbl_detallesplan_model extends Model
{
    use HasFactory;
    protected $table = 'tbl_detallesplan';
    //protected $primaryKey = 'aiddetalleplan';
    protected $fillable = [
        'aidplan',
        'aidueb',
        'aidservicio',
        'aidcausa',
        'ames',
        'aplan',
        'areal',
        'aobservaciones',
    ];

    public function plan(){
        return $this->belongsTo(tbl_planes_model::class);// detalle de plan pertenece a plan
    }
    public function ueb(){
        return $this->belongsTo(tbl_ueb_model::class);// detalle de plan pertenece a ueb
    }
    public function servicio(){
        return $this->belongsTo(tbl_servicios_model::class);// detalle de plan pertenece a ueb
    }
    public function causa(){
        return $this->belongsTo(tbl_causas_model::class);// detalle de plan pertenece a ueb
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tbl_servicios_model extends Model
{
    use HasFactory;
    protected $table = 'tbl_servicios';
    //protected $primaryKey = 'aidservicio';
    protected $fillable = [
        'aservicio',
        'aestado',
    ];

    public function detalleplanes(){
        return $this->hasmany(tbl_detallesplan_model::class);// servicio tiene muchos detalle de planes
    }
}

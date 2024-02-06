<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tbl_planes_model extends Model
{
    use HasFactory;
    protected $table = 'tbl_planes';
    //protected $primaryKey = 'id';
    protected $fillable = [
        'ayear',
        'aidtipoplan',
        'aestado',
    ];

    public function tipoplan(){
        return $this->belongsTo(tbl_tiposplan_model::class);// planes pertenece a tipos de plan
    }
    public function detalleplan(){
        return $this->hasmany(tbl_detallesplan_model::class);//plan tiene muchos detalles de plan
    }
    
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tbl_causas_model extends Model
{
    use HasFactory;
    protected $table = 'tbl_causas';
    //protected $primaryKey = 'aidcausas';
    protected $fillable = [
        'aCausa',
        'aestado',
    ];

    public function detalleplan(){
        return $this->hasmany(tbl_detallesplan_model::class);// ueb tiene muchos detalles de plan
    }
}

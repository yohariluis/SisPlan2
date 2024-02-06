<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tbl_estimados_model extends Model
{
    use HasFactory;
    protected $table = 'tbl_estimados';
    //protected $primaryKey = 'aidestimado';
    protected $fillable = [
        'aiddetalle',
        'aidplan',
        'afecha',
        'ames',
        'aestimado',
        'aobservaciones'
    ];

    public function plan(){
        return $this->belongsTo(tbl_planes_model::class);// estimados pertenece a plan
    }
}

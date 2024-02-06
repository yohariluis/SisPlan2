<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tbl_tiposplan_model extends Model
{
    use HasFactory;
    protected $table = 'tbl_tiposplan';
    //protected $primaryKey = 'aidtipoplan';
    protected $fillable = [
        'atipoplan',
        'aestado',
    ];

    public function planes(){
        return $this->hasmany(tbl_planes_model::class);// tipo de plan tiene muchos planes
    }
    
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tbl_ueb_model extends Model
{
    use HasFactory;
    protected $table = 'tbl_ueb';
    //protected $primaryKey = 'aidueb';
    protected $fillable = [
        'aueb',
        'aorden',
        'acma',
        'adetective',
        'aproteccion',
        'aproyecto',
        'atrasladoValores',
        'asalaConteo',
        'atecnica',
        'atsp',
        'asinplan',
        'aestado',
    ];

    public function detalleplan(){
        return $this->hasmany(tbl_detallesplan_model::class);// ueb tiene muchos detalles de plan
    }
    public function detallegasto(){
        return $this->hasmany(tbl_detallesgastos_model::class);// detallegasto tiene muchos detalles de plan
    }
    
}

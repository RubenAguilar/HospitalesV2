<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cita extends Model
{
    use HasFactory;
    static $rules = [
		'paciente_id' => 'required',
		'Fecha' => 'required',
    ];
    /**
     * fillable
     *
     * @var array
     */
    protected $fillable = [
        'paciente_id',
        'Fecha',
       
    ];
    public function user()
    {
        return $this->hasOne('App\Models\User', 'id', 'paciente_id');
    }

}

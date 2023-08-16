<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Cita
 *
 * @property $id
 * @property $paciente_id
 * @property $FechaHora
 * @property $created_at
 * @property $updated_at
 *
 * @property User $user
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Cita extends Model
{
    
    static $rules = [
		'paciente_id' => 'required',
		'FechaHora' => 'required|after:now',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['paciente_id','FechaHora'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function user()
    {
        return $this->hasOne('App\Models\User', 'id', 'paciente_id');
    }
    

}

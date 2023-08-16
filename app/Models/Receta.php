<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Receta
 *
 * @property $id
 * @property $cita_id
 * @property $Tratamiento1
 * @property $Tratamiento2
 * @property $Tratamiento3
 * @property $Tratamiento4
 * @property $Tratamiento5
 * @property $created_at
 * @property $updated_at
 *
 * @property Cita $cita
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Receta extends Model
{
    
    static $rules = [
		'cita_id' => 'required',
		'Tratamiento1' => 'required|max:100',
    'Tratamiento2' => 'required|max:100',
    'Tratamiento3' => 'required|max:100',
    'Tratamiento4' => 'required|max:100',
    'Tratamiento5' => 'required|max:5',

   
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['cita_id','Tratamiento1','Tratamiento2','Tratamiento3','Tratamiento4', 'Tratamiento5'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function cita()
    {
        return $this->hasOne('App\Models\Cita', 'id', 'cita_id');
    }
    

}

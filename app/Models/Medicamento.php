<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Medicamento
 *
 * @property $id
 * @property $Nombre_medicamento
 * @property $gramaje
 * @property $tipo_med
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Medicamento extends Model
{
    
    static $rules = [
		'Nombre_medicamento' => 'required',
		'gramaje' => 'required',
		'tipo_med' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['Nombre_medicamento','gramaje','tipo_med'];



}
